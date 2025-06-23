<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkyLink - Premium Cloud Solutions</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        /* Header Styles */
        .header {
            background: #1e3a8a;
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .header-container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo {
            display: flex;
            align-items: center;
            color: white;
            font-size: 1.5rem;
            font-weight: bold;
            text-decoration: none;
        }

        .logo::before {
            content: "☰";
            margin-right: 0.5rem;
            background: #3b82f6;
            padding: 0.25rem;
            border-radius: 4px;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-menu a {
            color: white;
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-menu a:hover {
            color: #fbbf24;
        }

        .login-btn {
            background: #fbbf24;
            color: #1e3a8a;
            padding: 0.5rem 1.5rem;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            transition: background 0.3s;
        }

        .login-btn:hover {
            background: #f59e0b;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #1e3a8a 0%, #3730a3 100%);
            padding: 4rem 0;
            color: white;
        }

        .hero-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: grid;
            grid-template-columns: 1fr 400px;
            gap: 4rem;
            align-items: center;
        }

        .hero-content h1 {
            font-size: 3rem;
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 1rem;
        }

        .hero-content p {
            font-size: 1.1rem;
            margin-bottom: 2rem;
            opacity: 0.9;
        }

        .server-locations {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .server-locations span {
            font-size: 0.9rem;
            opacity: 0.8;
        }

        .flags {
            display: flex;
            gap: 0.5rem;
        }

        .flag {
            width: 24px;
            height: 16px;
            border-radius: 2px;
        }

        .flag.uk { background: linear-gradient(to bottom, #012169 33%, white 33%, white 66%, #C8102E 66%); }
        .flag.us { background: linear-gradient(to bottom, #B22234 50%, white 50%); }
        .flag.de { background: linear-gradient(to bottom, #000 33%, #DD0000 33%, #DD0000 66%, #FFCE00 66%); }
        .flag.cn { background: #DE2910; }

        /* Pricing Card in Hero */
        .hero-pricing-card {
            background: #3b82f6;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
        }

        .hero-pricing-card .badge {
            background: #fbbf24;
            color: #1e3a8a;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
            display: inline-block;
            margin-bottom: 1.5rem;
        }

        .hero-pricing-card .features {
            list-style: none;
            margin-bottom: 2rem;
        }

        .hero-pricing-card .features li {
            display: flex;
            align-items: center;
            margin-bottom: 0.75rem;
            font-size: 0.95rem;
        }

        .hero-pricing-card .features li::before {
            content: "✓";
            background: #10b981;
            color: white;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 0.75rem;
            font-size: 0.8rem;
            font-weight: bold;
        }

        .hero-pricing-card .price {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }

        .hero-pricing-card .cta-btn {
            background: #fbbf24;
            color: #1e3a8a;
            padding: 0.75rem 2rem;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            display: block;
            text-align: center;
            transition: background 0.3s;
        }

        .hero-pricing-card .cta-btn:hover {
            background: #f59e0b;
        }

        /* Main Pricing Section */
        .pricing-section {
            padding: 4rem 0;
            background: #f8fafc;
        }

        .pricing-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .pricing-section h2 {
            text-align: center;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 3rem;
            color: #1e293b;
        }

        .pricing-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
        }

        .pricing-card {
            background: white;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            position: relative;
            border: 2px solid transparent;
        }

        .pricing-card.recommended {
            background: #3b82f6;
            color: white;
            border-color: #1d4ed8;
            transform: scale(1.05);
        }

        .pricing-card.recommended::before {
            content: "Recommended";
            position: absolute;
            top: -12px;
            left: 50%;
            transform: translateX(-50%);
            background: #fbbf24;
            color: #1e3a8a;
            padding: 0.5rem 1rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .pricing-card h3 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .pricing-card .price {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 2rem;
        }

        .pricing-card .features {
            list-style: none;
            margin-bottom: 2rem;
        }

        .pricing-card .features li {
            display: flex;
            align-items: center;
            margin-bottom: 0.75rem;
            font-size: 0.9rem;
        }

        .pricing-card .features li::before {
            content: "✓";
            background: #10b981;
            color: white;
            width: 18px;
            height: 18px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 0.75rem;
            font-size: 0.7rem;
            font-weight: bold;
        }

        .pricing-card .subscribe-btn {
            background: #3b82f6;
            color: white;
            padding: 0.75rem 2rem;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            display: block;
            text-align: center;
            transition: background 0.3s;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        .pricing-card.recommended .subscribe-btn {
            background: #fbbf24;
            color: #1e3a8a;
        }

        .pricing-card .subscribe-btn:hover {
            background: #2563eb;
        }

        .pricing-card.recommended .subscribe-btn:hover {
            background: #f59e0b;
        }

        /* Trust Section */
        .trust-section {
            padding: 4rem 0;
            background: white;
        }

        .trust-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            text-align: center;
        }

        .trust-section h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 3rem;
            color: #1e293b;
        }

        .trust-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 3rem;
        }

        .trust-stat {
            text-align: center;
        }

        .trust-stat .icon {
            font-size: 3rem;
            color: #3b82f6;
            margin-bottom: 1rem;
        }

        .trust-stat .number {
            font-size: 3rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 0.5rem;
        }

        .trust-stat .label {
            color: #64748b;
            font-size: 1.1rem;
        }

        /* FAQ Section */
        .faq-section {
            padding: 4rem 0;
            background: #f8fafc;
        }

        .faq-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .faq-section h2 {
            text-align: center;
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 3rem;
            color: #1e293b;
        }

        .faq-item {
            background: white;
            border-radius: 8px;
            margin-bottom: 1rem;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .faq-question {
            padding: 1.5rem;
            font-weight: 600;
            color: #1e293b;
            cursor: pointer;
            border-bottom: 1px solid #e2e8f0;
        }

        .faq-answer {
            padding: 1.5rem;
            color: #64748b;
            line-height: 1.6;
        }

        /* Contact Section */
        .contact-section {
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
            padding: 4rem 0;
            color: white;
        }

        .contact-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 0 2rem;
            text-align: center;
        }

        .contact-section h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 2rem;
        }

        .contact-form {
            background: white;
            border-radius: 12px;
            padding: 2rem;
            margin-bottom: 2rem;
        }

        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 1rem;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            margin-bottom: 1rem;
            font-size: 1rem;
        }

        .contact-form textarea {
            height: 120px;
            resize: vertical;
        }

        .contact-form button {
            background: #fbbf24;
            color: #1e3a8a;
            padding: 1rem 2rem;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            width: 100%;
            transition: background 0.3s;
        }

        .contact-form button:hover {
            background: #f59e0b;
        }

        .contact-info {
            display: flex;
            justify-content: center;
            gap: 2rem;
            font-size: 0.9rem;
        }

        .contact-info a {
            color: white;
            text-decoration: none;
        }

        /* Footer */
        .footer {
            background: #1e3a8a;
            padding: 3rem 0 2rem;
            color: white;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .footer-content {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 3rem;
            margin-bottom: 2rem;
        }

        .footer-brand h3 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 1rem;
        }

        .footer-brand p {
            opacity: 0.8;
            line-height: 1.6;
        }

        .footer-column h4 {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .footer-column ul {
            list-style: none;
        }

        .footer-column ul li {
            margin-bottom: 0.5rem;
        }

        .footer-column ul li a {
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-column ul li a:hover {
            color: white;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.2);
            padding-top: 2rem;
            text-align: center;
            opacity: 0.8;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-container {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .pricing-grid {
                grid-template-columns: 1fr;
            }

            .trust-stats {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .footer-content {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .nav-menu {
                display: none;
            }
        }
    </style>
</head>
<body>
    

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-container">
            <div class="hero-content">
                <h1>SKYLINK'S PREMIUM CLOUD SOLUTIONS</h1>
                <p>Enterprise-Grade Cloud Infrastructure. Unmatched Performance. Scale Your Business Today!</p>
                <div class="server-locations">
                    <span>Server Locations:</span>
                    <div class="flags">
                        <div class="flag uk"></div>
                        <div class="flag us"></div>
                        <div class="flag de"></div>
                        <div class="flag cn"></div>
                    </div>
                </div>
            </div>
            <div class="hero-pricing-card">
                <div class="badge">All-In-One Cloud Solution</div>
                <ul class="features">
                    <li>UNLIMITED Storage Space</li>
                    <li>UNLIMITED Bandwidth</li>
                    <li>24/7 Technical Support</li>
                    <li>SSL Certificate Included</li>
                    <li>Advanced Security Suite</li>
                </ul>
                <div class="price">$299/month</div>
                <a href="#" class="cta-btn">ORDER NOW</a>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="pricing-section">
        <div class="pricing-container">
            <h2>Choose Your Package</h2>
            <div class="pricing-grid">
                <!-- Standard Package -->
                <div class="pricing-card">
                    <h3>Standard</h3>
                    <div class="price">$99/month</div>
                    <ul class="features">
                        <li>Basic Cloud Storage</li>
                        <li>Standard Support</li>
                        <li>SSL Certificate</li>
                        <li>Basic Analytics</li>
                    </ul>
                    <button class="subscribe-btn">Subscribe</button>
                </div>

                <!-- Managed Package (Recommended) -->
                <div class="pricing-card recommended">
                    <h3>Managed</h3>
                    <div class="price">$199/month</div>
                    <ul class="features">
                        <li>Advanced Cloud Storage</li>
                        <li>Priority Support</li>
                        <li>SSL Certificate</li>
                        <li>Advanced Analytics</li>
                        <li>Management Tools</li>
                        <li>Daily Backups</li>
                    </ul>
                    <button class="subscribe-btn">Subscribe</button>
                </div>

                <!-- Premium Package -->
                <div class="pricing-card">
                    <h3>Premium</h3>
                    <div class="price">$399/month</div>
                    <ul class="features">
                        <li>Enterprise Storage</li>
                        <li>24/7 Premium Support</li>
                        <li>SSL Certificate</li>
                        <li>Full Analytics Suite</li>
                        <li>Advanced Tools</li>
                        <li>Hourly Backups</li>
                        <li>Dedicated Manager</li>
                        <li>Custom Solutions</li>
                    </ul>
                    <button class="subscribe-btn">Subscribe</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Trust Section -->
    <section class="trust-section">
        <div class="trust-container">
            <h2>Our Trusted Track Record</h2>
            <div class="trust-stats">
                <div class="trust-stat">
                    <div class="icon">🚀</div>
                    <div class="number">500+</div>
                    <div class="label">Projects Delivered</div>
                </div>
                <div class="trust-stat">
                    <div class="icon">👥</div>
                    <div class="number">100+</div>
                    <div class="label">Satisfied Clients</div>
                </div>
                <div class="trust-stat">
                    <div class="icon">🏆</div>
                    <div class="number">5</div>
                    <div class="label">Years Experience</div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="faq-container">
            <h2>Frequently Asked Questions</h2>
            
            <div class="faq-item">
                <div class="faq-question">What payment methods do you accept?</div>
                <div class="faq-answer">We accept all major credit cards, PayPal, and bank transfers. Enterprise clients can also arrange custom payment terms.</div>
            </div>

            <div class="faq-item">
                <div class="faq-question">How does the upgrade process work?</div>
                <div class="faq-answer">Upgrading is seamless - simply select your new plan and we'll handle the transition. All your data and settings will be preserved.</div>
            </div>

            <div class="faq-item">
                <div class="faq-question">What kind of support do you provide?</div>
                <div class="faq-answer">We offer 24/7 technical support via chat, email, and phone. Premium plans include dedicated account managers.</div>
            </div>

            <div class="faq-item">
                <div class="faq-question">Can I cancel my subscription anytime?</div>
                <div class="faq-answer">Yes, you can cancel your subscription at any time. We offer a prorated refund for unused service time.</div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="contact-container">
            <h2>Need Help? Ask Us!</h2>
            <form class="contact-form">
                <input type="text" placeholder="Your Name" required>
                <input type="email" placeholder="Your Email" required>
                <textarea placeholder="Your Message" required></textarea>
                <button type="submit">Send Message</button>
            </form>
            <div class="contact-info">
                <a href="mailto:support@skylink.com">📧 support@skylink.com</a>
                <a href="tel:+15551234567">📞 +1 (555) 123-4567</a>
                <a href="#">💬 Live Chat</a>
            </div>
        </div>
    </section>

    

    <script>
        // FAQ Toggle Functionality
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', () => {
                const answer = question.nextElementSibling;
                const isOpen = answer.style.display === 'block';
                
                // Close all other answers
                document.querySelectorAll('.faq-answer').forEach(ans => {
                    ans.style.display = 'none';
                });
                
                // Toggle current answer
                answer.style.display = isOpen ? 'none' : 'block';
            });
        });

        // Contact Form Submission
        document.querySelector('.contact-form').addEventListener('submit', (e) => {
            e.preventDefault();
            alert('Thank you for your message! We will get back to you soon.');
        });
    </script>
</body>
</html>