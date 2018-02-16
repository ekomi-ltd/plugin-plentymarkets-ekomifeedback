# plugin-plentymarkets-ekomifeedback

Ekomi is the leading third-party review service, specializing in the collection, management and publishing of seller and product ratings for businesses. Thanks to our constant innovation and market-leading technology, we offer the most flexible review generation methods, allowing you to reach all your clients, both online and offline to request their feedback. The more ratings you get for your business, the more traffic you drive to your site, the more trust you create among current and potential clients, and the more you will boost your sales and ROI.

With our official eKomi Plugin for Plentymarkets you can now seamlessly integrate our eKomi review collection and display technology with your shop system and website. Automatically trigger the sending of a review request the moment an order has reached a predefined stat us, and display any product reviews received automatically on the corresponding product pages with our review container. This allows you to generate and display genuine client reviews, all while we syndicate your seller ratings to Google, Bing and Yahoo.
Please note that you will need an eKomi account to use the plugin, and our standard packages start at $49 monthly. For a live demonstration of our product, feel free to book your most convenient time slot here, or alternatively email us at support@ekomi.de.

<p>
<strong>Key features of the plugin:</strong>
</p>
<ul>
<li>The necessary order details are automatically read in from your shop system database which will enable eKomi to send your client a review request.</li>
<li>Determine which order status should trigger the review request  </li>
<li>Contact your clients via email or SMS.*</li>
<li>Request both seller and product* reviews from your clients.</li>
<li>Display product reviews and ratings automatically on the corresponding product pages through our Product Review Container (PRC)</li>

</ul>

<strong>Working with eKomi allows your to:</strong>
- Collect authentic seller and product ratings and reviews. 
Sign up for simple, configurable, grouped and bundle products.
- Personalize every aspect of your communication with your customers, from the email / SMS templates, to the look, contents and feel of the review form. 
- Boost customer loyalty and incentivise return purchases with our coupon feature.
- Manage your reviews with the help of our dedicated Customer Feedback Management team, who checks each and every review to make sure it is third-party compliant.  
- React to your feedback publicly, or moderate it privately through our dialogue feature to improve your customer service and feedback.
- Syndicate all of your seller ratings and reviews automatically to Google, Bing and Yahoo.   
- Activate your Seller Rating Extension to display stars on your Ads and increase your Click-through-rate by 17%. 
- Enable Review Rich Snippets and show stars next to your organic results to enhance your visibility and drive more relevant traffic to your site.  
- Display your eKomi Seal and Review Widget on your webpage to build trust and confidence among your website visitors, turning more browsers into   buyers and increasing sales.  
- Feature all of your reviews on your business Certificate Page, to help clients with their purchasing decision.

eKomi is available in English, French, German, Spanish, Dutch, Italian, Portuguese, Polish, Russian, Swedish, Finnish, Norwegian, Czech, Hungarian, Turkish, Hebrew, Arabic, Thai, Japanese and Korean.

If you have any questions regarding the plugin, please get in touch! Email us at support@ekomi.de, call us on +1 844-356-6487, or fill out our contact form.


## Requirements

- plentymarkets version 7.0.0
- [IO Plugin](https://marketplace.plentymarkets.com/plugins/templates/IO_4696)
- [Ceres Plugin](https://marketplace.plentymarkets.com/plugins/templates/Ceres_4697)

## Guides
1. [User Guide](https://ekomi01.atlassian.net/wiki/spaces/PD/pages/101450083/Documentation+-+eKomi+Feedback+Plugin+-+Plentymarkets)

## Installation

Follow these steps to install the plugin.

1. Login to Admin Panel **<your-shop-url>/plenty/terra/login**
 
2. Go **Plugins » Git**

3. Click on **+ New Plugin** button
 
4. Enter Plugin Git URL & Git Account Credentials

    Remote Url: 
    ```
    https://github.com/ekomi-ltd/plugin-plentymarkets-ekomifeedback.git
    ```
    Username: --your git username

    Password:  --your git password

    After inserting the details click on Test Connection button. It will validate the details.

    Branch: master

    And then Click on Save button.
 
5. Fetch The Latest Plugin Changes

6. Go **Plugins » Content** and Select Clients for eKomiFeedback plugin
    - Click on Search icon
    - Choose Clients

7. Deploy EkomiFeedback Plugin In Productive It will take few minutes and then productive icon will turn to blue.
 
8. Go to **EkomiFeedback » Configuration**
      - Enable / Disable The Plugin
      - Insert your Interface Shop Id
      - Insert your Interface Shop Secret
      - Enable / Disable Product Reviews ( if enabled, product attributes will also be sent to eKomi i.e.  product id, name, image and URL )
      - Enable / Disable Group Reviews ( if enabled, Reviews of child/variants products will also be added  )
      - Select Mode. (for SMS, mobile number format should be according E164)
      - Insert Client Store Plenty IDs. Multiple comma separated Plenty ID can also be added.(optional)
      - Select Order Statuses on which you want to send information to eKomi.
      - Select Referrers Filter (out) to filter out the orders.
      - Insert Text when no reviews found.
      
      **Note:** Please make sure, The Shop Id and Secret is correct. In the case of invalid credentials the plugin will not work.
      
9. Save the configuration form by clicking on Save Icon

10. Waite for 15 minutes

11. Go **Plugins » Content**
      - Activate mini stars counter
         >Find **_Mini Stars Counter (EkomiFeedback)_**        
            Select container where to display      
            i.e Tick **_Single Item: Before price_**
      - Activate Reviews Container
        >Find **Reviews Container (EkomiFeedback)**<br>
            Select container where to display  

## Provisioning the plugin
- Go to **Plugins »**
- In the row of your plugin, click on Select client.
- Select your client and save it.
- Activate the plugin in the Productive column.
- In the toolbar, click on Provision plugins in Productive.
    → Once a success message is displayed, we are ready to check the output.