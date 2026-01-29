# 📌 Phishing Awareness System

The Phishing Awareness System is a web-based educational project developed to demonstrate how phishing attacks work in real-world scenarios. It simulates a fake login page similar to popular platforms and shows how attackers collect sensitive information such as usernames, passwords, and IP addresses. The main aim of this project is to spread awareness about online security threats and promote safe internet practices.

This project is designed for students, beginners, and cybersecurity enthusiasts who want practical exposure to phishing techniques and ethical hacking concepts.

---

## 🎯 Project Objectives

* To educate users about phishing attacks and social engineering.
* To demonstrate how fake websites are used to steal credentials.
* To promote awareness about online privacy and security.
* To encourage responsible and ethical use of technology.

---

## 🛠️ Tech Stack

* Backend: Laravel (PHP)
* Frontend: Blade + Tailwind CSS
* Database: MySQL
* Mailing: Laravel Mailer

---

## ⚙️ Installation & Setup

### Prerequisites

Before running this project, make sure you have the following installed on your system:

* PHP (8.0 or higher)
* Composer (PHP Dependency Manager)
* XAMPP / WAMP / Laragon (for Apache & MySQL)
* MySQL Server
* Node.js & NPM (for Tailwind CSS assets)
* Web Browser (Chrome / Edge / Firefox)

### Steps

1. Clone the repository:

   ```bash
   git clone https://github.com/Soham792/PhishingAwarenessSystem.git
   ```

2. Navigate to project directory:

   ```bash
   cd your-repository-name
   ```

3. Install dependencies:

   ```bash
   composer install
   ```

4. Create environment file:

   ```bash
   cp .env.example .env
   ```

5. Configure database in `.env` file.

6. Generate application key:

   ```bash
   php artisan key:generate
   ```

7. Run migrations:

   ```bash
   php artisan migrate
   ```

8. Start the server:

   ```bash
   php artisan serve
   ```

9. Open in browser:

   ```
   http://127.0.0.1:8000
   ```

---

## 📖 Usage

1. Launch the application on a local server.
2. Generate a unique tracking link.
3. Share the link for testing purposes.
4. Enter sample credentials on the fake login page.
5. View captured data in the admin dashboard.
6. Analyze phishing techniques and risks.

⚠️ Use only in controlled and ethical environments.

---

## 📚 Learning Outcomes

* Understanding real-world phishing methods
* Web security fundamentals
* Laravel framework usage
* Ethical hacking principles
* Database management
* Secure application development

---

## ⚠️ Disclaimer

This project is developed strictly for educational and awareness purposes only. It is not intended for illegal, unethical, or malicious activities. Any misuse of this project is solely the responsibility of the user. The developer does not promote or support cybercrime in any form.

---

## 👨‍💻 Developer

**Soham Marathe**
Electronics & Computer Science Engineering Student
