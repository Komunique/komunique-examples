const axios = require('axios');

// app-id e app-token são obtidos ao criar uma conta
const headers = {
    "app-id": "00000000-0000-0000-0000-000000000000",
    "app-token": "00000000000000000000000000000000"
} 

axios.post('https://api.komunique.com.br/v1/sms',  
    {
        "destination_number": "+55987654321",
        "message": "Hello SMS"
    },
    { headers: headers }
).then(function (response) {
    console.log(response);
});