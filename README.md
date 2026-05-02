# 🤖 ALYA - AI Assistant [UNDER CONSTRUCTION]

A sleek and modern AI assistant chat interface with an elegant user interface and smooth animations. ALYA provides an immersive experience with a beautiful glass-morphism design and animated video background.

---

## ✨ Features

- **Modern UI Design** - Clean, minimalist interface with glass-morphism effects
- **Animated Background** - Full-screen video background for an immersive experience
- **Responsive Layout** - Flexible design that adapts to different screen sizes
- **Smooth Animations** - Hover effects and transitions for better interactivity
- **Glowing Button Effects** - Cyan-colored button with glowing neon effects
- **Real-time Messaging** - Chat interface with message input and send functionality
- **Online Status Indicator** - Visual indicator showing assistant availability

---

## 🚀 Getting Started

### Prerequisites
- A modern web browser (Chrome, Firefox, Safari, Edge)
- A video file named `bg.mp4` for the background animation

### Installation

1. **Clone or download the project:**
   ```bash
   git clone <repository-url>
   cd AlyaAiAssitant
   ```

2. **Add your background video:**
   - Place your `bg.mp4` video file in the project root directory
   - The video will automatically loop and cover the entire background

3. **Open the application:**
   - Simply open `index.html` in your web browser
   - No server or build tools required!

---

## 📁 Project Structure

```
AlyaAiAssitant/
├── index.html          # Main HTML file with embedded CSS and JavaScript
├── bg.mp4              # Background video (add your own)
├── alya.ico            # Assistant icon/logo (optional)
└── README.md           # This file
```

---

## 🎨 Customization

### Change Colors
Edit the CSS variables in `index.html`:
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

---

## 🖥️ Technologies Used

- **HTML5** - Semantic markup and video element
- **CSS3** - Modern styling with flexbox and animations
- **JavaScript** - Interactive functionality
- **Video Background** - Native HTML5 video API

---

## 📝 Features Breakdown

### Layout
- **Flexbox Container** - Centered, responsive design
- **Transparent Box** - Semi-transparent overlay with rounded corners
- **Full-Screen Video** - Background video that covers the entire viewport

### Interactive Elements
- **Input Field** - Smooth, styled text input with rounded borders
- **Send Button** - Cyan button with glowing neon effect and hover animation
- **Status Indicator** - Shows real-time online status

### Visual Effects
- **Neon Glow** - Cyan button with box-shadow glow effect
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
