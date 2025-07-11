<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Testimonial Carousel</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <style>
    body {
      background: #f9fafb;
      margin: 0;
      padding: 0;
    }

    .container {
      max-width: 1200px;
      margin: auto;
      padding: 40px 20px;
    }

    .section-title {
      text-align: center;
      font-size: 2.5rem;
      margin-bottom: 10px;
    }

    .text-center {
      text-align: center;
    }

    .fade-in {
      animation: fadeIn 1s ease-in;
    }

    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    .carousel {
      overflow: hidden;
      position: relative;
    }

    .carousel-track {
      display: flex;
      transition: transform 0.5s ease;
      width: max-content;
    }

    .testimonial-card {
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
      margin: 0 10px;
      padding: 20px;
      width: 300px;
      box-sizing: border-box;
      flex-shrink: 0;
    }

    .testimonial-header {
      display: flex;
      align-items: center;
      margin-bottom: 15px;
    }

    .testimonial-avatar {
      width: 60px;
      height: 60px;
      border-radius: 50%;
      object-fit: cover;
      margin-right: 15px;
    }

    .testimonial-info h6 {
      margin: 0;
      font-weight: 600;
    }

    .testimonial-rating {
      margin-top: 10px;
      color: #fbbf24;
    }

    .testimonial-dots {
      text-align: center;
      margin-top: 20px;
    }

    .testimonial-dot {
      display: inline-block;
      width: 10px;
      height: 10px;
      background: #ccc;
      border-radius: 50%;
      margin: 5px;
      cursor: pointer;
      transition: background 0.3s;
    }

    .testimonial-dot.active {
      background: #3B82F6;
    }

    @media (max-width: 992px) {
      .testimonial-card {
        width: 90vw;
        margin: 10px;
      }
    }
  </style>
</head>
<body>

  <section class="testimonials-section">
    <div class="container">
      <h2 class="section-title fade-in">What Our Clients Say About</h2>
      <h3 class="text-center mb-5 fade-in" style="color: #3B82F6; font-weight: 600;">Our Digital Services</h3>

      <div class="carousel">
        <div class="carousel-track" id="carouselTrack">
          <!-- Testimonials will be inserted by JavaScript -->
        </div>
      </div>

      <div class="testimonial-dots" id="testimonialDots"></div>
=======
<!-- Live Chat Widget -->
<div id="liveChatContainer" style="display:none; position: fixed; bottom: 20px; right: 20px; width: 350px; font-family: 'Arial', sans-serif; z-index: 9999;">
    <div style="background:#4CAF50; color:#fff; padding:10px; border-top-left-radius:10px; border-top-right-radius:10px; cursor:pointer; display:flex; align-items:center; justify-content:space-between;">
        <h4 style="margin:0;">💬 Live Support</h4>
        <button id="closeChatBtn" style="background:none; border:none; color:#fff; font-size:20px; cursor:pointer;">×</button>
>>>>>>> aa90497886681e118393594b0f27cdd2c1c858ba
    </div>
    <div style="background:#fff; height:400px; display:flex; flex-direction:column; border:1px solid #ccc; border-top:none; border-radius:0 0 10px 10px; overflow:hidden;">
        <div id="chatMessages" style="flex:1; padding:10px; overflow-y:auto; background:#f1f1f1;">
            <!-- Chat messages will appear here -->
        </div>
        <div style="padding:10px; display:flex; align-items:center; background:#eee;">
            <input type="text" id="chatInput" placeholder="Type a message..." style="flex:1; padding:8px; border:none; border-radius:20px; outline:none; font-size:14px;">
            <button id="sendBtn" style="margin-left:10px; background:#4CAF50; color:#fff; border:none; padding:8px 12px; border-radius:20px; cursor:pointer;">🚀</button>
        </div>
    </div>
</div>

<!-- Chat toggle button -->
<button id="openChatBtn" title="Chat with us" style="position:fixed; bottom:20px; right:20px; background:#4CAF50; color:#fff; border:none; border-radius:50%; width:60px; height:60px; font-size:24px; cursor:pointer; box-shadow:0 4px 8px rgba(0,0,0,0.2); z-index:9998;">💬</button>
<script>
document.addEventListener('DOMContentLoaded', () => {
    const chatContainer = document.getElementById('liveChatContainer');
    const openBtn = document.getElementById('openChatBtn');
    const closeBtn = document.getElementById('closeChatBtn');
    const chatMessages = document.getElementById('chatMessages');
    const chatInput = document.getElementById('chatInput');
    const sendBtn = document.getElementById('sendBtn');

    // Open chat
    openBtn.onclick = () => {
        chatContainer.style.display = 'block';
        openBtn.style.display = 'none';
    };

    // Close chat
    closeBtn.onclick = () => {
        chatContainer.style.display = 'none';
        openBtn.style.display = 'block';
    };

    // Send message handler
    function sendMessage() {
        const message = chatInput.value.trim();
        if(message === '') return;

        // Append user message
        appendMessage('You', message, 'right');

        // Clear input
        chatInput.value = '';

        // Generate bot reply
        getBotReply(message);
    }

    // Append message function
    function appendMessage(sender, message, align='left') {
        const msgDiv = document.createElement('div');
        msgDiv.style.marginBottom = '10px';
        msgDiv.style.display='flex';
        msgDiv.style.flexDirection='column';
        msgDiv.style.alignItems=align==='right'?'flex-end':'flex-start';

        const senderSpan = document.createElement('span');
        senderSpan.innerHTML = `<strong>${sender}:</strong>`;
        senderSpan.style.fontSize='12px';
        senderSpan.style.color='#555';

        const messageSpan = document.createElement('span');
        messageSpan.innerHTML = message;
        messageSpan.style.background=align==='right'?'#DCF8C6':'#fff';
        messageSpan.style.padding='8px 12px';
        messageSpan.style.borderRadius='20px';
        messageSpan.style.maxWidth='80%';
        messageSpan.style.wordWrap='break-word';

        msgDiv.appendChild(senderSpan);
        msgDiv.appendChild(messageSpan);
        chatMessages.appendChild(msgDiv);
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }

    // Get bot reply (simulate AI with predefined responses + emojis)
    
    function getBotReply(userMsg) {
    fetch('/api/chat', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({ message: userMsg })
    })
    .then(response => response.json())
    .then(data => {
        const reply = data.reply;
        appendMessage('Bot', reply, 'left');
    })
    .catch(() => {
        appendMessage('Bot', "Sorry, I couldn't get a response.", 'left');
    });
}

    // Event listeners
    sendBtn.onclick = sendMessage;
    chatInput.addEventListener('keypress', (e) => {
        if(e.key === 'Enter') sendMessage();
    });
});


</script>