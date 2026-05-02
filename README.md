# 🌸 Alya — AI Assistant

<p align="center">
  <img src="alya.ico" width="100px"/>
  <br>
  <i>Your personal AI waifu, powered by Claude.</i>
</p>

---

## ✨ Overview

**Alya** is a personal AI assistant web app with a sleek anime-themed UI, built by **Sam**. She's charming, teasing, a little flirty — and surprisingly helpful. Powered by Anthropic's Claude API, Alya remembers your full conversation history and responds with personality.

---

## 🖼️ Preview

> Animated video background, glowing cyan UI, and Alya's avatar — all wrapped in a dark glassmorphism card.

---

## 🚀 Features

- 💬 **Real-time AI chat** powered by Anthropic's Claude (`claude-opus-4-7`)
- 🗃️ **Persistent chat history** stored in a MySQL database via XAMPP
- 🎴 **Anime-themed UI** with a custom avatar and video background
- ⚡ **No page flicker** — redirects seamlessly after each message

---

## 🛠️ Tech Stack

| Layer | Technology |
|-------|-----------|
| Frontend | HTML, CSS |
| Backend | PHP |
| AI | Anthropic Claude API (cURL) |
| Database | MySQL (XAMPP / MariaDB) |
| Server | Apache (XAMPP) |

---

## ⚙️ Setup & Installation

### Prerequisites
- [XAMPP](https://www.apachefriends.org/) (PHP 8.0+, Apache, MySQL)
- An [Anthropic API Key](https://console.anthropic.com/)

### Steps

**1. Clone the repository**
```bash
git clone https://github.com/SamJoel2007/Alya_AI_Assistant.git
cd Alya_AI_Assistant
```

**2. Move to XAMPP htdocs**
```
C:\xampp\htdocs\AlyaAiAssitant\
```

**3. Import the database**

Open phpMyAdmin, create a database named `alya`, then import the included `alya.sql` file.

**4. Add your API key**

In `index.php`, find this line and replace it with your Anthropic API key:
```php
'x-api-key: your-api-key-here',
```

**5. Start XAMPP**
- Start **Apache** and **MySQL** from the XAMPP Control Panel
- Visit `http://localhost/AlyaAiAssitant/`

---

## 📁 Project Structure

```
AlyaAiAssitant/
├── index.php       # Main app — UI + chat logic
├── styles.css      # Styling
├── bg.mp4          # Background video
├── alya.ico        # Alya's avatar
├── alya.sql        # Database dump
└── .gitignore
```

---

## 🔐 Security Note

Never hardcode your Anthropic API key in source files before pushing to GitHub. GitHub's push protection will automatically block it.

---

## 👤 Author

Made with ❤️ by **Sam**
- GitHub: [@SamJoel2007](https://github.com/SamJoel2007)

---

## 📄 License

This project is open source and available under the [MIT License](LICENSE).
