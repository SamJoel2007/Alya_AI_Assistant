# 🤖 ALYA - AI Assistant

A sleek and modern AI assistant chat interface powered by Claude AI with an elegant user interface and smooth animations. ALYA provides an immersive experience with a beautiful glass-morphism design, animated video background, and real-time AI responses.

---

## ✨ Features

- **Modern UI Design** - Clean, minimalist interface with glass-morphism effects
- **Animated Background** - Full-screen video background for an immersive experience
- **Responsive Layout** - Flexible design that adapts to different screen sizes
- **Smooth Animations** - Hover effects and transitions for better interactivity
- **Glowing Button Effects** - Cyan-colored button with glowing neon effects
- **Real-time Messaging** - Chat interface with message input and send functionality
- **Online Status Indicator** - Visual indicator showing assistant availability
- **AI-Powered Responses** - Integration with Anthropic's Claude API for intelligent responses
- **Auto-Scrolling Chat** - Messages scroll smoothly as conversation grows

---

## 🚀 Getting Started

### Prerequisites
- PHP 7.4+ with cURL support
- XAMPP or similar local server environment
- A modern web browser (Chrome, Firefox, Safari, Edge)
- Anthropic API key
- A video file named `bg.mp4` for the background animation

### Installation

1. **Clone or download the project:**
   ```bash
   git clone <repository-url>
   cd AlyaAiAssitant
   ```

2. **Place in your web server directory:**
   - Copy the project to `htdocs` (for XAMPP) or your server's web root

3. **Add your Anthropic API key:**
   - Open `index.php`
   - Replace the placeholder API key with your actual Anthropic API key
   - Keep it secure—consider using environment variables for production

4. **Add your background video:**
   - Place your `bg.mp4` video file in the project root directory
   - The video will automatically loop and cover the entire background

5. **Start your local server:**
   - If using XAMPP, start Apache
   - Navigate to `http://localhost/AlyaAiAssitant/`

---

## 📁 Project Structure

```
AlyaAiAssitant/
├── index.php           # Main file with UI and chat handling
├── chat.php            # Deprecated (functionality moved to index.php)
├── bg.mp4              # Background video (add your own)
├── alya.ico            # Assistant icon/logo (optional)
└── README.md           # This file
```

---

## 🎨 Customization

### Change Colors
Edit the CSS variables in `index.php`:
- **Button Color:** Modify `background-color: #00ffff;` in `.myBtn` class
- **Box Transparency:** Adjust `rgba(0, 0, 0, 0.5)` in `.transparentbox` class
- **Glow Effects:** Change `box-shadow: 0 0 10px #00ffff, 0 0 20px #00ffff;` values

### Change Text
- **Title:** Replace `<h1>ALYA - AI ASSISTANT</h1>` with your text
- **Placeholder:** Edit `placeholder="Type message here..."` in the input field
- **Button Label:** Change `SEND` text in the button

### Replace Background Video
- Swap `bg.mp4` with your own video file
- Ensure the video is optimized for web (small file size, MP4 format)

### Update Icon
- Replace `alya.ico` with your own icon file
- Adjust the size with the `width` attribute

### Adjust AI Model
- In `index.php`, modify the `model` parameter in the `chat()` function
- Default is `claude-opus-4-7` for best results

---

## 🖥️ Technologies Used

- **PHP** - Backend server-side processing
- **HTML5** - Semantic markup and video element
- **CSS3** - Modern styling with flexbox and animations
- **JavaScript** - Interactive functionality
- **Anthropic Claude API** - AI-powered chat responses
- **cURL** - HTTP requests to API

---

## 🔑 API Configuration

The application uses the Anthropic API for AI responses. Make sure to:
1. Obtain your API key from [Anthropic's website](https://console.anthropic.com/)
2. Add your API key to the `chat()` function in `index.php`
3. Ensure your account has sufficient credits/access to the Claude models

---

## 📝 Features Breakdown

### Layout
- **Flexbox Container** - Centered, responsive design
- **Transparent Box** - Semi-transparent overlay with rounded corners
- **Full-Screen Video** - Background video that covers the entire viewport
- **Auto-scrolling Content** - Messages area scrolls when content exceeds viewport

### Interactive Elements
- **Input Field** - Smooth, styled text input with rounded borders
- **Send Button** - Cyan button with glowing neon effect and hover animation
- **Status Indicator** - Shows real-time online status

### Backend Processing
- **Message Handling** - PHP processes user input and sends to Anthropic API
- **API Integration** - Secure communication with Claude AI
- **Response Display** - Formatted output of both user and AI messages
- **Error Handling** - Graceful handling of missing POST parameters

---

## 🐛 Troubleshooting

**Undefined array key warning:**
- This is fixed in the current version with null coalescing operators (`??`)

**Textbox disappearing:**
- Fixed with `overflow-y: auto` CSS to enable scrolling

**No response from AI:**
- Check your Anthropic API key is valid
- Ensure PHP cURL is enabled
- Verify internet connection
- Check browser console for errors

---

## ✅ Project Status

**COMPLETE** - All features implemented and tested. Ready for use!
- **Hover States** - Button changes to white on hover
- **Video Background** - Parallax-like fixed positioning
- **Semi-transparent Overlay** - Creates depth and improves readability

---

## 🔧 Development

### To modify functionality:
1. Edit the `Authendication()` JavaScript function for custom logic
2. Add form validation before submission
3. Connect to a backend API for real AI responses
4. Implement WebSocket for real-time communication

### Example: Connect to API
```javascript
function Authendication() {
    const message = document.querySelector('.form123').value;
    // Send message to your AI backend
    fetch('/api/chat', {
        method: 'POST',
        body: JSON.stringify({ message: message })
    })
    .then(response => response.json())
    .then(data => console.log(data));
}
```

---

## 🎯 Browser Support

- ✅ Chrome 60+
- ✅ Firefox 55+
- ✅ Safari 12+
- ✅ Edge 79+

---

## 💡 Tips

- **Performance:** Keep your `bg.mp4` file under 5MB for faster loading
- **Mobile:** Test on mobile devices to ensure responsive design works well
- **Accessibility:** Consider adding alt text and ARIA labels for better accessibility
- **SEO:** Add meta tags if hosting online

---

## 📄 License

This project is open source and available under the MIT License.

---

## 👨‍💻 Author

Created with ❤️ for an immersive AI assistant experience.

---

## 🤝 Contributing

Contributions, issues, and feature requests are welcome! Feel free to submit a pull request.

---

**Made with ✨ Enjoy your AI Assistant journey!**
