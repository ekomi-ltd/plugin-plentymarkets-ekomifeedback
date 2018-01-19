# plugin-plentymarkets-ekomifeedback

eKomi ist der führende Bewertungsdienstleister, der sich auf die Sammlung, das Management und das Veröffentlichen von Seller- und Produktbewertungen für Unternehmen spezialisiert.
Mit unseren offiziellen eKomi Plugins für diverse Shopsysteme können Sie nun unsere eKomi-Review-Technologie nahtlos in Ihr Shop-System und Ihre Website integrieren. Es erfolgt ein automatischer Versand einer Bewertungsanfrage in dem Moment, in dem eine Bestellung einen vordefinierten Status erreicht hat, und auch das Anzeigen von Produkt Bewertungen, erfolgt automatisch auf den entsprechenden Produktseiten, mit unserem Product-Bewertungs-Container. Auf diese Weise werden echte Kundenbewertungen erstellt und angezeigt, während wir Ihre Händler Bewertungen gleichzeitig mit Google, Bing und Yahoo syndizieren. Bitte beachten Sie, dass Sie einen eKomi-Account benötigen, um dieses Plugin nutzen zu können. Für eine Live-Vorführung unseres Produktes, können Sie sich einen Ihnen passenden Termin aussuchen, oder senden Sie uns einfach eine Email an support@ekomi.de.

**Plug-In Funktionen:**

- Die notwendigen Details werden automatisch von Ihrer Datenbank gelesen, was eKomi befähigt Ihren Kunden eine Bewertungsanfrage zu senden.
- Bestimmen Sie, welcher Bestellstatus eine Bewertungsanfrage initiieren soll.
- Kontaktieren Sie Ihre Kunden anhand von Emails oder SMS*
- Erfragen Sie sowohl Kundenbewertungen, als auch Produktbewertungen* von Ihren Kunden
- Produktbewertungen und Sternebewertungen werden automatisch über unseren Product Review Container (PRC) auf den entsprechenden Produktseiten angezeigt*
*abhängig von Ihrem eKomi Abo

**Eine Zusammenarbeit mit eKomi erlaubt Ihnen:**

- das Sammeln von authentischen Seller- und Produktbewertungen
- Melden Sie sich für einfache, konfigurierbare, gruppierte und gebündelte Produkte an. 
- Personalisieren Sie jede Kommunikation mit Ihrem Kunden, sei es über Email / SMS Vorlagen, bis zum Design, dem Content und dem Feel des Bewertungsformulars.
- Steigern Sie Kundenloyalität und schaffen Sie Anreize für Ihre Kunden mit unserer Coupon Funktion Bestandskunde bei Ihnen zu werden.
- Verwalten Sie Ihre Bewertungen mit Hilfe unseres Customer Feedback Management Teams, das jede Bewertung auf ihre Rechtmäßigkeit überprüft.
- Sie haben die Wahl das Feedback öffentlich zu beantworten, oder es privat über unser Dialogfenster zu schicken.
- Syndizieren Sie Ihre Seller Ratings und Bewertungen automatisch an Google, Bing und Yahoo.
- Die Aktivierung Ihrer Seller Ratings Erweiterung mit Hilfe von Sternen in Ihren Ads steigert Ihre Click-Through-Rate um ca. 17%.
- Aktivieren Sie Rich Snippets und zeigen Sie Ihre Strernebewertung in Ihren organischen Suchergebnissen, um die Sichtbarkeit zu steigern und so mehr relevanten Traffic auf Ihrer Seite zu generieren.
- Integrieren Sie Ihr eKomi Siegel und das Bewertungswidget in ihrer Webseite, um Vertrauen zu schaffen und aus Surfern Käufer zu machen und Verkaufszahlen zu steigern.
- Heben Sie alle Ihre Bewertungen auf Ihrer Unternehmenszertifikatsseite hervor, um Kunden bei ihrer Kaufentscheidung zu helfen.

eKomi ist verfügbar in englisch, französisch, deutsch, spanisch, niederländisch, italienisch, portugiesisch, polnisch, russisch, schwedisch, finnisch, norwegisch, tschechisch, ungarisch, türkisch, hebräisch, arabisch, thailändisch, japanisch und koreanisch.

Bei weiteren Fragen bezüglich unseres Plugins, treten Sie mit uns in Kontakt! Schreiben Sie uns eine Email an support@ekomi.de, 
rufen Sie uns unter +49 (0)30 2000 444 999 an, oder melden Sie sich bei uns über unser Kontaktformular.

## Bedarf

- plentymarkets version 7.0.0
- [IO Plugin](https://marketplace.plentymarkets.com/plugins/templates/IO_4696)
- [Ceres Plugin](https://marketplace.plentymarkets.com/plugins/templates/Ceres_4697)

## Führer
1. [Benutzerhandbuch](https://ekomi01.atlassian.net/wiki/spaces/PD/pages/101450083/Documentation+-+eKomi+Feedback+Plugin+-+Plentymarkets)

## Installation

Befolgen Sie diese Schritte, um das Plugin zu installieren.

1. Loggen Sie sich in das Admin Panel ein **<your-shop-url>/plenty/terra/login**
 
2. Gehe zu **Plugins » Git**

3. Neues **+ New Plugin**
 
4. Geben Sie die Anmeldeinformationen für das Plugin Git URL & Git-Konto ein.

    Remote Url: 
    ```
    https://github.com/ekomi-ltd/plugin-plentymarkets-ekomifeedback.git
    ```
    
    User name: --Ihr git-Benutzername
    
    Password: --Ihr Passwort
    
    Nach dem Einfügen der Details klicken Sie auf die Schaltfläche Test Connection. Es wird die Details bestätigen.
    
    Branch: Master
    
    Und dann auf Speichern klicken.
 
5. Holen Sie sich die neuesten Plugin-Änderungen

6. Gehen Sie zu **Plugins » Plugin-Übersicht** und Wählen Sie Clients für das 
    - Klicken Sie auf das Suchsymbol
    - Wählen Sie Mandant

7. Implementieren Sie EkomiFeedback Plugin In Productive Es dauert einige Minuten und das produktive Icon wird dann blau.

8. Gehe zu **EkomiFeedback »Konfiguration**
  
    - Aktivieren / Deaktivieren des Plugins
    - Fügen Sie Ihre Interface Shop ID ein
    - Fügen Sie Ihr Interface Shop Secret ein
    - Aktivieren / deaktivieren Product Reviews (falls aktiviert, werden Produktattribute auch an eKomi gesendet, d. H. Produkt-ID, Name, Bild und URL)
    - Aktivieren / Deaktivieren Group Reviews (falls aktiviert, werden auch Reviews von Child- / Varianten-Produkten hinzugefügt)
    - Mode. (für SMS sollte das Mobiltelefonnummernformat E164 entsprechen)
    - Geben Sie Client Store Plenty IDs (comma separated) ein. Mehrere kommagetrennte Plenty ID können ebenfalls hinzugefügt werden. (Optional)
    - Wählen Sie Order Status, an dem Sie Informationen an eKomi senden möchten.
    - Wählen Sie Referrers Filter (out), um die Aufträge herauszufiltern.
    - Text when no reviews found.
    
    **Hinweis:** Bitte vergewissern Sie sich, dass die Shop-ID und das Secret korrekt sind. Im Falle ungültiger Zugangsdaten funktioniert das Plugin nicht.

9. Speichern Sie das Konfigurationsformular, indem Sie auf das Symbol "Speichern" klicken.

10. Warten Sie 15 Minuten

11. Gehen **Plugins » Content**
    - aktivieren Sie mini stars counter
        >Finden **_Mini Stars Counter (EkomiFeedback)_**        
        Container auswählen, wo angezeigt werden soll      
        i.e Tick **_Single Item: Before price_**
    - aktivieren Sie Reviews Container Tab
        >Finden **Reviews Container Tab (EkomiFeedback)**<br>
        Container auswählen **_Single Item: Add detail tabs_**
    - aktivieren Reviews Container
        >Finden **Reviews Container (EkomiFeedback)**<br>
        Container auswählen **_Single Item: Add content to detail tabs_**

## Bereitstellung des Plugin:
- Gehen Sie zu **Plugins » Plugin-Übersicht**.
- Klicken Sie in der Reihe Ihrer Plugins auf Kunden auswählen.
- Wählen Sie Ihren Kunden und speichern Sie.
- Aktivieren Sie das Plugin in der Produktiv Spalte. 
- In der Toolbar auf Bereitstellungs Plugins in Produktiv.
→ Sobald die Erfolgsmeldung dargestellt wird, können wir den Output kontrollieren.