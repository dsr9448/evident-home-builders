# Contact Form System - Evident Home Builders

## Overview
This system handles contact form submissions from the website and sends them via email to `info@evidenthomebuilders.in`.

## Files Created/Modified

### 1. `enquire.php` (New File)
- **Purpose**: Handles form submissions and sends emails
- **Features**:
  - Form validation (required fields, email format, phone format, name format)
  - Input sanitization to prevent XSS attacks
  - Email sending via PHP mail() function
  - Session-based success/error messages
  - Logging for successful submissions and errors
  - Security headers and proper email formatting

### 2. `contact.php` (Modified)
- **Changes Made**:
  - Updated form action to point to `enquire.php`
  - Fixed typo in textarea name attribute (`contact-messgae` → `contact-message`)
  - Added missing name attribute to service select dropdown
  - Added session_start() for message handling
  - Added alert message display functionality

### 3. `assets/js/main.js` (Modified)
- **Changes Made**:
  - Updated AJAX URL from `assets/php/contact.php` to `enquire.php`
  - Added page reload after successful submission to show server-side alerts
  - Added alert dismissal functionality
  - Auto-hide alerts after 5 seconds

### 4. `assets/css/style.css` (Modified)
- **Changes Made**:
  - Added custom alert styles for success and error messages
  - Responsive design for alerts
  - Close button styling and hover effects

## How It Works

1. **User fills out the contact form** on `contact.php`
2. **Form is submitted** to `enquire.php` via POST method
3. **Data validation** occurs (required fields, email format, etc.)
4. **Email is sent** to `info@evidenthomebuilders.in`
5. **User is redirected** back to `contact.php`
6. **Success/error message** is displayed as an alert
7. **Alert auto-hides** after 5 seconds or can be manually dismissed

## Email Format

The email sent will contain:
- **Subject**: "New Contact Form Submission - Evident Home Builders"
- **Content**:
  - Name
  - Email
  - Phone
  - Service (if selected)
  - Message
  - Submission timestamp
  - IP address

## Security Features

- **Input Sanitization**: All form inputs are sanitized using `htmlspecialchars()`
- **Validation**: Comprehensive validation for all fields
- **Session Management**: Secure session handling for messages
- **Email Headers**: Proper email headers to prevent spam
- **Logging**: Error logging for debugging and monitoring

## Requirements

- PHP with mail() function enabled
- Session support enabled
- Font Awesome (already included in header)
- jQuery (already included)

## Testing

To test the contact form:

1. Fill out the form on the contact page
2. Submit the form
3. Check if email is received at `info@evidenthomebuilders.in`
4. Verify success/error messages are displayed
5. Check server logs for any errors

## Troubleshooting

### Email Not Sending
- Check if PHP mail() function is enabled
- Verify server mail configuration
- Check error logs for specific error messages

### Form Not Working
- Ensure all required files are in place
- Check for JavaScript errors in browser console
- Verify PHP syntax and session support

### Alerts Not Showing
- Check if session_start() is called
- Verify CSS and JavaScript files are loaded
- Check browser console for errors

## Customization

### Change Email Address
Edit the `$to` variable in `enquire.php`:
```php
$to = "your-email@domain.com";
```

### Modify Alert Messages
Edit the success/error messages in `enquire.php`:
```php
$_SESSION['success'] = "Your custom success message";
$_SESSION['error'] = "Your custom error message";
```

### Change Alert Styling
Modify the CSS in `assets/css/style.css` under the "Alert Styles" section.

## Support

For any issues or questions regarding this contact form system, please check the server error logs and browser console for debugging information.
