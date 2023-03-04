import requests

# API endpoint
url = "https://api.sample.com/flights/search"

# Request parameters
params = {
    "origin": "IST",
    "destination": "DXB",
    "date": "2023-03-10"
}

# Make API request
response = requests.get(url, params=params)

# Check if the request is successful
if response.status_code == 200:
    # Parse the response JSON data
    data = response.json()

    # Get the ticket price
    ticket_price = data.get("price")

    # Print the ticket price
    print("Uçak bileti fiyatı:", ticket_price, "TL")
else:
    print("API request failed.")
