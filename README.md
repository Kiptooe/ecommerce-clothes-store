## This is an ecommerce store for selling clothes built using codeIgniter4.The clothes can belong to either Men,Women,Kids or Pets category. This project was done in my second year of university.

# Important
1. To obtain the database check the file named `manustore.sql`
2. To obtain the user credentials(for logging in) check the file named `UserCredentials.txt`

# System Functionality

**1.Administrator**
# Roles
1. The administrator should be able to add/edit a new category
2. The administrator should be able to add/edit a new subcategory
3. The administrator should be able to add/edit a new item (clothing) and assign 
categories
4. The administrator should be able to add/edit a new user
5. The administrator should be able to generate tokens/ user access keys for API access(**Yet to be done**)
6. The administrator should be able to generate tokens for specific API products(**Yet to be done**)
7. The administrator should view analytics on(**Doing**):

- All purchases per category, subcategory, product, user, gender. This can be 
represented as a table and/ or graph
- Highest/ Lowest purchases done per user, category, subcategory, product.
- *Stock out alerts (forecasting for maybe 3 months based on monthly-moving 
average product sales)

**2.Buyer**
# Roles
1. The user should be able to register for an account and login into their account
2. The user should be able to view all items filtered by different categories/ 
subcategories, date added, price (lowest to highest/ highest to lowest)
3. The user should be able to purchase an item/ items
4. The user should be able to add money to their wallet (simulated)
5. The user should be able to pay for the items from their wallet (within the system), or 
via a payment processing system
6. The user should be able to view their purchase history as a summary and granulated 
(by category, by date, by price)
7. The user should receive a receipt for their purchases(**Yet to be done**)
8. User should be able to print the receipts as PDF (**Yet to be done**)

**3.API User** (**Yet to be done**)
# Roles
1. The system should allow the API user to register 
2. The system should be able to give an API user a general API access token (that has an 
expiry date) or an API key
3. The system should allow the API user to register for/ subscribe to specific API 
products
4. The system should log any API access (IP address of request) for analytics purposes
5. The system should be able to provide access to data for an authenticated API users 
accessing approved API paths