#  Laravel Security App – Assignment 3 (Hacktivist)

## Access Control & IDOR Protection

This Laravel application implements secure access control to prevent IDOR (Insecure Direct Object References).

###  Protected Feature:
- `/orders/{id}`: Only the user who owns the order can view its details.
- If another user tries to access an order they do not own, they receive a **403 Forbidden** error.

 *How to Test:
1- Register two user accounts.

2- Create orders under both accounts.

3- Log in as User A and try to access User B’s orders via /orders/{id}.

4- Confirm that User A gets a 403 Forbidden error when accessing User B’s orders.

5- Attempt to access a non-existing order ID to confirm a 404 Not Found response.



---

## Where to Find These Features in the Hosted App
#### Access Control / IDOR Protection
- Log in as a user who owns an order (e.g., /orders/1) and confirm you can view it.

- Log out and log in as a different user.

- Try accessing the same order URL (/orders/1).

- You should receive a 403 Forbidden error, confirming the order is protected against unauthorized access.

## Session Security
- Open your browser’s developer tools and inspect the cookies.

- Verify the session cookie has these security attributes:

- Secure flag (cookie sent only over HTTPS).

- HttpOnly flag (not accessible via JavaScript).

- SameSite=Strict attribute (prevents cross-site request forgery).

## Additional Notes
- The app should be served over HTTPS for SESSION_SECURE_COOKIE=true to be effective.

- Custom 403 and 404 error pages provide meaningful feedback when users access unauthorized or non-existent orders.

- The navigation bar includes a **My Orders** link for easy access to the logged-in user’s orders.
