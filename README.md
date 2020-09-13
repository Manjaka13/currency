# currency
This is an application that converts currency from/to USD/EUR/MGA it was made using basic HTML/CSS and JS.
With ajax call we get the data from an extern webservice: https://free.currconv.com

Do not forget to enable openssl in your php.ini file by removing the coma before:
extension=php_openssl.dll
and then restart your server
This is needed to submit external https requests.