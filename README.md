Synchronize Customers and SugarCRM Contacts
===========================================

This extension allow you automaticaly synchronize Magento Customers data with SugarCRM Contacts.
* Automaticaly create new Contact if Contact with this Customer email not exists.
* Automaticaly update information if Contact exists.
* Extension will synchronize this Customer info: Prefix, First Name, Last Name, Email, Birth date, Customer Addresses (primary Billing/Shipping).

#INSTRUCTION
* Open configuration page of "Customers into SugarCRM":
[Top menu of Magento Store Admin Panel] System -> Configuration -> [select tab in CUSTOMERS section] "Customers into SugarCRM"
* Expand section "Extension Options" and enable extension: "Enable synchronization of Customers into SugarCRM" set to "Yes"
* Expand section "SugarCRM Options"
* Enter the URL to SugarCRM REST API (v2 or v3 or v4)
* Enter the login of SugarCRM REST user
* Enter the password of SugarCRM REST user
* Save Config

Now automaticaly, after saving/updating of customers info (on the frontend or admin side), extension will synchronize it with SugarCRM. After deleting of Customer account - extension also will remove the related Contact from SugarCRM.