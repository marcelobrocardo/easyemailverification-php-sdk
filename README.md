# 📨 Easy Email Verification PHP SDK

**Easy Email Verification – Email Checker** is a lightweight PHP SDK that allows developers to connect directly to the [Easy Email Verification API](https://eev.stoplight.io/docs/eev/902yv4tm9bfd9-easy-email-verification-api) and verify whether an email address is **real, active, and safe to use**.

This SDK makes it simple to integrate the **[Email Checker](https://www.easyemailverification.com/email-checker)** into any PHP-based system — such as CRMs, signup forms, marketing platforms, or backend applications.

---

## 🔍 Features

- ✅ Real-time email verification via REST API  
- 🧠 Detects invalid, disposable, role-based, and risky addresses  
- 🌐 Checks domain, MX records, and SMTP responses  
- ⚙️ Easy-to-use PHP class for quick integration  
- 🔑 API Key authentication  
- 🧾 JSON response with detailed verification result  

---

## 🧩 Official Distribution

The **Email Checker PHP SDK** is officially distributed on **[SourceForge](https://sourceforge.net/projects/email-checker-php-sdk/)** — one of the most trusted open-source platforms in the world.

[![Download on SourceForge](https://a.fsdn.com/con/app/sf-download-button)](https://sourceforge.net/projects/email-checker-php-sdk/)

SourceForge provides a secure mirror for releases, public download statistics, and long-term availability for open-source software.  
You can download the latest stable version or clone the GitHub repository for development.

---

### 📦 Available Packages
| Platform | Link | Description |
|-----------|------|-------------|
| **GitHub** | [github.com/marcelobrocardo/easyemailverification-php-sdk](https://github.com/marcelobrocardo/easyemailverification-php-sdk) | Development repository with full source code and examples. |
| **SourceForge** | [sourceforge.net/projects/email-checker-php-sdk](https://sourceforge.net/projects/email-checker-php-sdk/) | Official distribution channel and stable releases. |

---

## 🌐 Official Links

| Resource | URL |
|-----------|-----|
| 🏠 Website | [https://www.easyemailverification.com](https://www.easyemailverification.com) |
| 📬 Email Checker | [https://www.easyemailverification.com/email-checker](https://www.easyemailverification.com/email-checker) |
| 🔗 Integrations | [https://www.easyemailverification.com/en-US/integrations](https://www.easyemailverification.com/en-US/integrations) |
| 📘 API Documentation | [https://eev.stoplight.io/docs/eev/902yv4tm9bfd9-easy-email-verification-api](https://eev.stoplight.io/docs/eev/902yv4tm9bfd9-easy-email-verification-api) |

---

## 💻 Installation

Clone this repository:

```bash
git clone https://github.com/marcelobrocardo/easyemailverification-php-sdk.git
```


---

## 🧩 Usage Example

```php
<?php
require_once "src/EasyEmailVerificationClient.php";

$client = new EasyEmailVerificationClient("YOUR_API_KEY");

// Single email verification
$result = $client->verifyEmail("test@example.com");

print_r($result);
```

Sample response:

```json
{
  "email": "support@example.com",
  "result": "invalid",
  "reason": "no_mx_record",
  "disposable": false,
  "accept_all": false,
  "role": true,
  "free": false,
  "user": "support",
  "domain": "example.com",
  "mx_record": "",
  "mx_domain": "",
  "safe_to_send": false,
  "did_you_mean": "support@gmail.com",
  "success": true,
  "message": null,
  "http_code": "200"
}
```

---


## 📚 Learn More

To explore other tools, connectors, and API integrations (such as **ActiveCampaign**, **Zapier**, **Zoho CRM**, **RD Station**, and more), visit:

👉 [https://www.easyemailverification.com/en-US/integrations](https://www.easyemailverification.com/en-US/integrations)

For complete API endpoints and technical parameters, see:

📘 [Easy Email Verification API Reference](https://eev.stoplight.io/docs/eev/902yv4tm9bfd9-easy-email-verification-api)

---

## 📄 License

MIT License © [Easy Email Verification](https://www.easyemailverification.com)
