import requests
from urllib.parse import quote

payload = {
    'fromEmail' : 'myGmail@gmail.com',
    'to_email' : 'reciverGmail@gmail.com',
    'subject' : quote('About Nice Weather!'),
    'message' : quote('Its such a nice weather lets hang out'),
    'emailPassword' : 'xsydtdiyiudgiud'
}

response = requests.get('https://yourdomain.com', params=payload)
print(response.text)
