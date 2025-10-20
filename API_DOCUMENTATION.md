# eKomi Feedback Plugin API Documentation

## Overview

The eKomi Feedback Plugin for Plentymarkets is a comprehensive review management system that automatically collects and displays customer feedback. This plugin integrates with the eKomi review platform to send review requests to customers and display product reviews on your Plentymarkets store.

## Plugin Information

- **Plugin Name**: EkomiFeedback
- **Version**: 3.3.7
- **Namespace**: EkomiFeedback
- **Author**: eKomi Ltd
- **License**: AGPL-3.0
- **Type**: General Plugin
- **Service Provider**: `EkomiFeedback\Providers\EkomiFeedbackServiceProvider`

## Architecture

### Core Components

1. **Controllers**: Handle HTTP requests and responses
2. **Services**: Business logic and external API integration
3. **Repositories**: Data access layer
4. **Helpers**: Utility functions and configuration management
5. **Containers**: Widget rendering for frontend display
6. **Crons**: Automated background tasks

## API Endpoints

### 1. Order Data Export

**Endpoint**: `GET /sendOrdersToEkomi`

**Controller**: `EkomiFeedback\Controllers\ContentController`

**Description**: Manually triggers the export of order data to eKomi system.

**Response**: Returns a rendered Twig template.

**Usage**:
```http
GET /sendOrdersToEkomi
```

## External API Integration

### eKomi API Endpoints

#### 1. Shop Validation

**Endpoint**: `http://api.ekomi.de/v3/getSettings`

**Method**: GET

**Purpose**: Validates shop credentials with eKomi system

**Parameters**:
- `auth`: Shop ID and Secret (format: `{shop_id}|{shop_secret}`)
- `version`: cust-1.0.0
- `type`: request
- `charset`: iso
- `app`: PD-plentymarket

**Response**: Returns shop settings or "Access denied" for invalid credentials

#### 2. Order Data Submission

**Endpoint**: `https://plugins-dashboard.ekomiapps.de/api/v1/order`

**Method**: PUT

**Purpose**: Sends order data to eKomi Plugins Dashboard

**Headers**:
- `Content-Type`: multipart/form-data;boundary={boundary}

**Request Body**: JSON-encoded order data

## Configuration API

### Configuration Parameters

The plugin uses the following configuration parameters accessible through `ConfigHelper`:

| Parameter | Type | Description | Default |
|-----------|------|-------------|---------|
| `is_active` | boolean | Enable/disable plugin | false |
| `shop_id` | string | eKomi Shop ID | "" |
| `shop_secret` | string | eKomi Shop Secret | "" |
| `product_reviews` | boolean | Enable product reviews | false |
| `mode` | string | Communication mode (email/sms/fallback) | "email" |
| `turnaround_time` | integer | Days to wait before sending review request | 10 |
| `plenty_IDs` | string | Comma-separated Plenty IDs | "" |
| `product_identifier` | string | Product identification method (id/number/variation) | "id" |
| `exclude_products` | string | Comma-separated product IDs to exclude | "" |
| `show_widgets` | boolean | Enable widget display | false |
| `prc_widget_token` | string | PRC Widget token | "" |
| `miniStars_widget_token` | string | MiniStars Widget token | "" |
| `order_status` | array | Order statuses to trigger review requests | ["7.00"] |
| `referrer_id` | array | Referrer IDs to filter out | ["none"] |

### Configuration Methods

#### ConfigHelper Class

```php
// Get configuration values
$configHelper = pluginApp(ConfigHelper::class);

// Check if plugin is enabled
$isEnabled = $configHelper->getEnabled();

// Get shop credentials
$shopId = $configHelper->getShopId();
$shopSecret = $configHelper->getShopSecret();

// Get communication settings
$mode = $configHelper->getMode();
$turnaroundTime = $configHelper->getTurnaroundTime();

// Get product settings
$productReviews = $configHelper->getProductReviews();
$productIdentifier = $configHelper->getProductIdentifier();
$excludeProducts = $configHelper->getExcludeProducts();

// Get widget settings
$showWidgets = $configHelper->getShowWidgets();
$prcToken = $configHelper->getPrcWidgetToken();
$miniStarsToken = $configHelper->getMiniStarsWidgetToken();

// Get filter settings
$orderStatuses = $configHelper->getOrderStatus();
$referrerIds = $configHelper->getReferrerIds();
$plentyIds = $configHelper->getPlentyIDs();
```

## Data Models

### Order Data Structure

The plugin processes orders with the following structure:

```php
$order = [
    'id' => 'Order ID',
    'plentyId' => 'Plenty ID',
    'referrerId' => 'Referrer ID',
    'statusId' => 'Order Status ID',
    'addresses' => [
        [
            'countryId' => 'Country ID',
            'countryName' => 'Country Name',
            'isoCode2' => 'ISO Code 2',
            'isoCode3' => 'ISO Code 3'
        ]
    ],
    'orderItems' => [
        [
            'itemVariationId' => 'Variation ID',
            'itemId' => 'Item ID',
            'itemVariationNumber' => 'Variation Number',
            'image_url' => 'Product Image URL',
            'canonical_url' => 'Product URL'
        ]
    ],
    'senderName' => 'Store Name',
    'senderEmail' => 'Store Email'
];
```

### API Request Structure

When sending data to eKomi, the plugin formats the request as follows:

```php
$requestData = [
    'shop_id' => 'eKomi Shop ID',
    'interface_password' => 'eKomi Shop Secret',
    'mode' => 'Communication mode',
    'product_reviews' => 'Product reviews enabled',
    'plugin_name' => 'plentymarkets',
    'product_identifier' => 'Product identifier method',
    'exclude_products' => 'Excluded products',
    'order_data' => $order // Complete order object
];
```

## Services

### EkomiServices Class

Main service class handling all eKomi API interactions.

#### Methods

##### `sendOrdersData()`
- **Purpose**: Main method to process and send orders to eKomi
- **Process**:
  1. Validates plugin is enabled
  2. Validates shop credentials
  3. Fetches orders based on filters
  4. Processes each order and sends to eKomi

##### `validateShop()`
- **Purpose**: Validates shop credentials with eKomi API
- **Returns**: boolean (true if valid, false otherwise)

##### `doCurl($requestUrl, $requestType, $httpHeader = [], $postFields = '')`
- **Purpose**: Makes HTTP requests to external APIs
- **Parameters**:
  - `$requestUrl`: API endpoint URL
  - `$requestType`: HTTP method (GET/PUT)
  - `$httpHeader`: HTTP headers array
  - `$postFields`: POST data
- **Returns**: API response string

##### `exportOrder($order, $orderStatuses, $referrerIds, $plentyIDs)`
- **Purpose**: Processes individual order for export
- **Parameters**:
  - `$order`: Order data array
  - `$orderStatuses`: Allowed order statuses
  - `$referrerIds`: Referrer IDs to filter out
  - `$plentyIDs`: Allowed Plenty IDs

##### `sendData($orderData, $orderId)`
- **Purpose**: Sends formatted order data to eKomi
- **Parameters**:
  - `$orderData`: Formatted order data
  - `$orderId`: Order ID for logging
- **Returns**: API response string

### EkomiHelper Class

Utility class for data processing and formatting.

#### Methods

##### `preparePostVars($order)`
- **Purpose**: Formats order data for eKomi API
- **Returns**: Formatted array ready for API submission

##### `getProductsData($orderItems, $plentyId)`
- **Purpose**: Processes order items and adds product details
- **Returns**: Array of processed product data

##### `getItemUrl($plentyId, $itemId)`
- **Purpose**: Generates product URL
- **Returns**: Product URL string

##### `getItemImageUrl($itemId, $variationId)`
- **Purpose**: Gets product image URL
- **Returns**: Image URL string

##### `prepareFilter($turnaroundTime)`
- **Purpose**: Creates date filters for order fetching
- **Returns**: Array with date range filters

## Widget System

### Data Providers

The plugin provides three data providers for frontend widgets:

#### 1. MiniStars Widget
- **Key**: `EkomiFeedback\Containers\EkomiFeedbackMiniStarsWidget`
- **Container**: `Ceres::SingleItem.BeforePrice`
- **Purpose**: Displays star ratings on product pages

#### 2. PRC Widget Tab
- **Key**: `EkomiFeedback\Containers\EkomiFeedbackPrcWidgetTab`
- **Container**: `Ceres::SingleItem.AddDetailTabs`
- **Purpose**: Adds review tab to product pages

#### 3. PRC Widget
- **Key**: `EkomiFeedback\Containers\EkomiFeedbackPrcWidget`
- **Container**: `Ceres::SingleItem.AddDetailTabsContent`
- **Purpose**: Displays full review content

### Widget Configuration

Each widget requires:
- Plugin enabled (`is_active = true`)
- Widgets enabled (`show_widgets = true`)
- Valid widget token
- Product identifier configuration

## Cron Jobs

### EkomiFeedbackCron

**Schedule**: Runs every hour (configurable)

**Purpose**: Automatically processes and sends orders to eKomi

**Process**:
1. Logs cron execution
2. Calls `EkomiServices::sendOrdersData()`

## Error Handling

### Error Codes

The plugin uses the following error codes for logging:

- `exception`: General exceptions
- `Invalid Credentials`: Invalid shop credentials
- `PD-Response`: Plugins Dashboard response
- `Plenty ID not matched`: Plenty ID filtering
- `Plugin is not activated`: Plugin disabled
- `OrderData`: Order data processing errors
- `PostFields`: POST data formatting errors
- `CronStatus`: Cron job status

### Logging

All operations are logged using Plentymarkets' logging system with appropriate log levels:
- **Info**: Normal operations, order counts, API responses
- **Error**: Exceptions, validation failures, API errors

## Order Status Configuration

The plugin supports filtering orders by status. Available statuses include:

- **1**: Order received
- **3**: Order confirmed
- **4**: Order in progress
- **5**: Order shipped
- **6**: Order delivered
- **7**: Order completed
- **8**: Order cancelled
- **9**: Order returned
- **10-18**: Various custom statuses

## Referrer Filtering

Orders can be filtered by referrer ID to exclude specific traffic sources:

- **0-7**: Standard referrers
- **101-149**: Custom referrers
- **2.01-2.22**: Special referrers
- **4.01-4.22**: Additional referrers
- **104.01-104.22**: Extended referrers

## Product Identification

Three methods for identifying products:

1. **ID**: Uses item ID
2. **Number**: Uses item number
3. **Variation**: Uses variation ID

## Installation and Setup

### Prerequisites

1. Plentymarkets 7.x
2. Valid eKomi account
3. eKomi Shop ID and Secret

### Installation Steps

1. Download plugin from Plentymarkets Marketplace
2. Install via Plugins > Purchases
3. Configure in Plugin Set Overview
4. Activate for desired clients
5. Deploy to production

### Configuration Steps

1. Enable plugin
2. Enter eKomi credentials
3. Configure communication settings
4. Set order status triggers
5. Configure widgets (optional)
6. Set product identification method
7. Configure filters

## Support and Contact

- **Email**: support@ekomi-group.com
- **Phone**: +1 844-356-6487
- **Documentation**: [User Guide](https://ekomi01.atlassian.net/wiki/spaces/PD/pages/101450083/Documentation+-+eKomi+Feedback+Plugin+-+Plentymarkets)

## Version History

### v3.3.7 (21-10-2024)
- Added 'Fressnapf AC' to referrer exclusions

### v3.3.6 (20-02-2024)
- Updated cron time to 1 hour

### v3.3.5 (15-03-2022)
- Fixed extra error logging for order ID

### v3.3.4 (21-02-2022)
- Updated plugin version

### v3.3.3 (18-01-2022)
- Fixed extra error logging for plenty ID

### v3.3.2 (10-01-2022)
- Added parameter to core API
- Updated support email

## License

This project is licensed under the AGPL-3.0 License.
