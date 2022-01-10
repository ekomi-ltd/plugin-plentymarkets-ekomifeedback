## eKomi Feedback

eKomi is the leading third-party review service, specializing in the collection, management and publishing of seller and product ratings for businesses. Thanks to our constant innovation and market-leading technology, we offer the most flexible review generation methods, allowing you to reach all your clients, both online and offline to request their feedback. The more ratings you get for your business, the more traffic you drive to your site, the more trust you create among current and potential clients, and the more you will boost your sales and ROI.

##### Key features of the plugin:
- The necessary order details are automatically read in from your shop system database which will enable eKomi to send your client a review request.
- Determine which order status should trigger the review request.
- Contact your clients via email or SMS. *
- Request both seller and product* reviews from your clients.
- Display product reviews and ratings automatically on the corresponding product pages through our Product Review Container (PRC)

#####   Working with eKomi allows you to:
- Collect authentic seller and product ratings and reviews. Sign up for simple, configurable, grouped and bundled products.
- Personalize every aspect of your communication with your customers, from the email / SMS templates, to the look, content, and feel of the review form.
- Boost customer loyalty and incentivize return purchases with our coupon feature.
- Manage your reviews with the help of our dedicated Customer Feedback Management team, who checks each and every review to make sure it is compliant with third-parties. 
- React to your feedback publicly, or moderate it privately through our dialogue feature to improve your customer service and feedback.
- Syndicate all of your seller ratings and reviews automatically to Google, Bing, and Yahoo.
- Activate your Seller Rating Extension to display stars on your Ads and increase your Click-through-rate by 17%.
- Enable Review Rich Snippets and show stars next to your organic results to enhance your visibility and drive more relevant traffic to your site.
- Display your eKomi Seal and Review Widget on your webpage to build trust and confidence among your website visitors, turning more browsers into buyers and increasing sales.
- Feature all of your reviews on your business Certificate Page, to help clients with their purchasing decision.

eKomi is available in English and German.

If you have any questions regarding the plugin, please get in touch! Email us at support@ekomi-group.com, call us on +1 844-356-6487, or fill out our contact form.


### Have an eKomi account
Please note that you will need an eKomi account to use the plugin, and our standard packages **start at $49 monthly.** For a live demonstration of our product, feel free to book your most convenient time slot here, or alternatively email us at support@ekomi-group.com

### Installing the eKomi Feedback plugin
Please download the [eKomi FeedBack plugin](https://marketplace.plentymarkets.com/plugins/integration/EkomiFeedback_5253) from the Plentymarkets Marketplace. You can install the plugin from the menu under Plugins / Purchases. Just click the button that says “Install” for the eKomi Feedback plugin on the far right.

### Configuring the eKomi Feedback plugin
1. Got to Plugins » Plugin set overview.

2. Select the Plugin set from the list.

3. Click on the name of the plugin, eKomi FeedBack, to get access to the plugin. There you find the "configuration" of your plugin.
   	- Enable the Plugin
   	- Enter your Interface ID
   	- Enter your Interface Password
   	- Enable / Disable Product Reviews (if enabled, product attributes will also be sent to eKomi i.e. product id, name, image, and URL)
   	- Select Mode. (for SMS, mobile number format should be according to E164)
   	- Enter Turnaround Time (Time it takes for an order to get complete)
   	- Insert Client Store Plenty IDs. Multiple commas separated Plenty IDs can also be added. (optional)
       - Select Product Identifier (How do you identify the product?)
       - Enter Exclude Products (Enter Product IDs/SKUs(comma separated) which should not sent to eKomi)
       - Enable / Disable Show PRC Widget (Enable this if you want to show PRC widget)
       - Insert token in MiniStars Widget Token field. (Extract token from the widget code provided by eKomi and insert here)
       - Insert token in PRC Widget Token field. (Extract token from the widget code provided by eKomi and insert here)
   	- Select Order Statuses on which you want to send information to eKomi.
   	- Select Referrers Filter (out) to filter out the orders.
   	
   	**Note:** Please make sure, The Shop Id and Shop Password are correct. In the case of invalid credentials, the plugin will not work.
   	
   	Please contact support@ekomi-group.com if you want an opt-in function.
   	
4. Browse to Plugins / Plugin set overview and activate the plugin for the desired clients. Activate the plugin "in productive" and click on the icon “Deploy Plugins in Productive”. Deployment can take several minutes. If the deployment has been successful, the field next to the Deploy button is shown in green. If this is not the case, please contact your support representative.

5. Display the Smart Widgets. 
    - Go to Plugins » Plugin set overview.
    - Open the plugin set you want to edit.
    - Open the settings of the plugin whose containers you want to link.
    - Click on the Container links tab.
    - Select the containers links in the containers list area.
    - Save the Container links. 

## Guides
1. [User Guide](https://ekomi01.atlassian.net/wiki/spaces/PD/pages/101450083/Documentation+-+eKomi+Feedback+Plugin+-+Plentymarkets)

## Built With

* plentymarkets stable 7 framework

## Versioning

### v3.3.2 (10-01-2022)
- Add param into core Api.
- Update support email

### v3.3.1 (25-01-2021)
- Fix log messages.

### v3.2.1 (07-02-2020)
- Fixed the referrer out issue while sending orders data.

### v3.2.0 (02-12-2019)
- Removed the smart check feature.

### v3.1.4 (28-11-2019)
- Fixed urlService issue in helper class.

### v3.1.3 (16-09-2019)
- Removed the auto-enable customer segment functionality.

### v3.1.2 (11-09-2019)
- Fixed issue with miniStars widget on listing pages.

### v3.1.1 (21-08-2019)
- Fixed issue in saving plugin configuration form.

### v3.1.0 (14-06-2019)
- Added the MiniStars Smart Widget.

### v3.0.0 (31-05-2019)
- Smart check feature
- Option to select id/sku
- Option to exclude products
- Sending product & image URL
- eKomi Product reviews container removed
- Integration of smart widget. 

### v2.2.0 (09-06-2018)
- Code optimization.
- Turnaround time feature.

### v2.1.0 (05-06-2018)
- Code redundancy fixed.

### v2.0.0 (29-05-2018)
- Cronjob running time changed to 24 hour.
- Config new structure & Multilingualism.

### v1.3.3 (23-04-2018)
- Cronjob running time changed to 15 minute.
- Clicking on ministars opens PRC.

### v1.3.2 (22-03-2018)
- Surrounding Twig-Block removed.

### v1.3.1 (13-03-2018)
- User Guides updated (EN,DE)

### v1.3.0 (13-03-2018)
- Resources Content-Provider added

### v1.2.1 (05-03-2018)
- Short description updated
- User Guides updated (EN,DE)

### v1.2.0 (19-01-2018)
- Added Translations files
- Compatibility issue fixed

### v1.1.0 (15-12-2017)
- Added auth Middleware in routes, Changed logs messages, and fixed sendOrdersData method.

### v1.0.1 (28-11-2017)
- Plugin description and user guides updated

### v1.0.0 (16-11-2017)
- A complete working plugin

## Authors

* **eKomi** - [github profile](https://github.com/ekomi-ltd)

See also the list of [contributors](https://github.com/ekomi-ltd/plugin-plentymarkets-ekomifeedback/graphs/contributors) who participated in this project.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
