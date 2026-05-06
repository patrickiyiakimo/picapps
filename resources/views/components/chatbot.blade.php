<!-- Chatbot Button & Modal -->
<div id="chatbot-container" class="fixed bottom-6 right-6 z-50">
    <!-- Chat Button -->
    <button id="chatbot-toggle" class="bg-emerald-600 hover:bg-emerald-500 text-white p-4 rounded-full shadow-xl transition-all duration-300 transform flex items-center gap-2 group">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
        </svg>
        <span class="hidden md:inline">Ask Alta AI</span>
    </button>

    <!-- Chat Modal -->
    <div id="chatbot-modal" class="hidden fixed bottom-24 right-6 w-96 bg-white rounded-xl shadow-2xl border border-emerald-200 overflow-hidden z-50">
        <!-- Header -->
        <div class="bg-gradient-to-r from-emerald-600 to-emerald-500 p-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                    <h3 class="text-white font-semibold">Alta AI Assistant</h3>
                </div>
                <button id="close-chatbot" class="text-white hover:text-gray-200">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <p class="text-emerald-100 text-xs mt-1">Ask me anything about our services!</p>
        </div>

        <!-- Chat Messages -->
        <div id="chat-messages" class="h-96 overflow-y-auto p-4 bg-gray-50 space-y-3">
            <!-- Welcome Message -->
            <div class="flex items-start gap-2">
                <div class="w-8 h-8 bg-emerald-600 rounded-full flex items-center justify-center flex-shrink-0">
                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <div class="flex-1 bg-white rounded-lg p-3 shadow-sm">
                    <p class="text-sm text-gray-800">👋 Hi! I'm Alta AI. I can help you with:</p>
                    <ul class="text-xs text-gray-600 mt-1 space-y-1">
                        <li>• Website & app development pricing</li>
                        <li>• Project timelines</li>
                        <li>• Technology recommendations</li>
                        <li>• Booking a consultation call</li>
                    </ul>
                    <p class="text-sm text-gray-800 mt-2">What would you like to know?</p>
                </div>
            </div>
        </div>

        <!-- Quick Suggestions -->
        <div id="quick-suggestions" class="p-3 bg-gray-100 border-t border-gray-200">
            <div class="flex flex-wrap gap-2">
                <button class="suggestion-btn text-xs bg-white px-3 py-1 rounded-full text-emerald-600 border border-emerald-300 hover:bg-emerald-50">
                    How much for a website?
                </button>
                <button class="suggestion-btn text-xs bg-white px-3 py-1 rounded-full text-emerald-600 border border-emerald-300 hover:bg-emerald-50">
                    Do you build mobile apps?
                </button>
                <button class="suggestion-btn text-xs bg-white px-3 py-1 rounded-full text-emerald-600 border border-emerald-300 hover:bg-emerald-50">
                    Timeline for a project?
                </button>
            </div>
        </div>

        <!-- Input Area -->
        <div class="p-4 bg-white border-t border-gray-200">
            <div class="flex gap-2">
                <input type="text" id="chat-input" placeholder="Type your question..." 
                       class="flex-1 px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-emerald-500 text-sm">
                <button id="send-message" class="bg-emerald-600 text-white px-4 py-2 rounded-lg hover:bg-emerald-500 transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>

<script>
    // Chatbot functionality
    const chatbotToggle = document.getElementById('chatbot-toggle');
    const chatbotModal = document.getElementById('chatbot-modal');
    const closeChatbot = document.getElementById('close-chatbot');
    const chatInput = document.getElementById('chat-input');
    const sendBtn = document.getElementById('send-message');
    const chatMessages = document.getElementById('chat-messages');

    // Open/Close Chatbot
    chatbotToggle.addEventListener('click', () => {
        chatbotModal.classList.toggle('hidden');
    });

    closeChatbot.addEventListener('click', () => {
        chatbotModal.classList.add('hidden');
    });

    // AI Response Function
    function getAIResponse(userMessage) {
        const msg = userMessage.toLowerCase();
        
        if (msg.includes('price') || msg.includes('cost') || msg.includes('how much')) {
            return "💰 Our pricing varies based on project scope. Websites start at $2,500, mobile apps at $8,000, and e-commerce solutions at $5,000. Would you like to book a free consultation for an exact quote?";
        } 
        else if (msg.includes('website')) {
            return "🌐 Yes! We build custom websites including corporate sites, e-commerce stores, and web applications using Laravel, React, and Vue.js. Want to see some examples?";
        }
        else if (msg.includes('mobile') || msg.includes('app')) {
            return "📱 Absolutely! We develop iOS, Android, and cross-platform apps using Flutter and React Native. We handle everything from design to app store submission!";
        }
        else if (msg.includes('timeline') || msg.includes('how long')) {
            return "⏱️ A typical website takes 4-8 weeks, mobile apps 8-16 weeks, and e-commerce sites 6-12 weeks. Complex projects may take longer. Want to discuss your specific timeline?";
        }
        else if (msg.includes('book') || msg.includes('call') || msg.includes('consultation')) {
            return "📞 Great! Please visit our contact page or click the 'Book a Call' button on our hero section. Our team will reach out within 24 hours!";
        }
        else if (msg.includes('technology') || msg.includes('tech')) {
            return "⚙️ We use Laravel, React, Vue.js for web; Flutter, React Native for mobile; and Tailwind CSS for styling. We always recommend the best tech for your needs!";
        }
        else if (msg.includes('portfolio') || msg.includes('work')) {
            return "🎨 Yes! We have 500+ successful projects. I'd recommend checking out our Work/Portfolio section to see real examples of what we've built.";
        }
        else if (msg.includes('support') || msg.includes('maintenance')) {
            return "🛠️ We offer 24/7 support and maintenance plans starting at $199/month including security updates, backups, and priority support.";
        }
        else {
            return "Thanks for your message! For specific details about your project, I recommend booking a free consultation call with our team. Click 'Book a Call' to get started!";
        }
    }

    // Add message to chat
    function addMessage(message, isUser = false) {
        const messageDiv = document.createElement('div');
        messageDiv.className = `flex items-start gap-2 ${isUser ? 'flex-row-reverse' : ''}`;
        
        if (isUser) {
            messageDiv.innerHTML = `
                <div class="w-8 h-8 bg-navy-600 rounded-full flex items-center justify-center flex-shrink-0">
                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
                <div class="flex-1 bg-emerald-600 rounded-lg p-3 shadow-sm">
                    <p class="text-sm text-white">${message}</p>
                </div>
            `;
        } else {
            messageDiv.innerHTML = `
                <div class="w-8 h-8 bg-emerald-600 rounded-full flex items-center justify-center flex-shrink-0">
                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <div class="flex-1 bg-gray-100 rounded-lg p-3 shadow-sm">
                    <p class="text-sm text-gray-800">${message}</p>
                </div>
            `;
        }
        
        chatMessages.appendChild(messageDiv);
        chatMessages.scrollTop = chatMessages.scrollHeight;
    }

    // Send message handler
    function sendMessage() {
        const message = chatInput.value.trim();
        if (!message) return;
        
        addMessage(message, true);
        chatInput.value = '';
        
        // Show typing indicator
        const typingDiv = document.createElement('div');
        typingDiv.className = 'flex items-start gap-2';
        typingDiv.innerHTML = `
            <div class="w-8 h-8 bg-emerald-600 rounded-full flex items-center justify-center flex-shrink-0">
                <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                </svg>
            </div>
            <div class="flex-1 bg-gray-100 rounded-lg p-3">
                <div class="flex gap-1">
                    <span class="w-2 h-2 bg-gray-400 rounded-full animate-bounce"></span>
                    <span class="w-2 h-2 bg-gray-400 rounded-full animate-bounce" style="animation-delay: 0.1s"></span>
                    <span class="w-2 h-2 bg-gray-400 rounded-full animate-bounce" style="animation-delay: 0.2s"></span>
                </div>
            </div>
        `;
        chatMessages.appendChild(typingDiv);
        chatMessages.scrollTop = chatMessages.scrollHeight;
        
        // Simulate AI response
        setTimeout(() => {
            typingDiv.remove();
            const response = getAIResponse(message);
            addMessage(response);
        }, 1000);
    }

    sendBtn.addEventListener('click', sendMessage);
    chatInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') sendMessage();
    });

    // Suggestion buttons
    document.querySelectorAll('.suggestion-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            chatInput.value = btn.textContent;
            sendMessage();
        });
    });

    // Open chatbot from hero button
    const openChatbotBtn = document.getElementById('open-chatbot');
    if (openChatbotBtn) {
        openChatbotBtn.addEventListener('click', () => {
            chatbotModal.classList.remove('hidden');
        });
    }
</script>