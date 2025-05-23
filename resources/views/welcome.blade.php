<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juan Avila - Author | Humor, Parenting & Life Insights</title>
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Juan Avila, author specializing in humor, parenting, and anger management. Discover insightful and entertaining books that bring laughter to everyday life challenges.">
    <meta name="keywords" content="Juan Avila, author, humor books, parenting books, anger management, comedy writer, family humor, life insights">
    <meta name="author" content="Juan Avila">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Juan Avila - Author | Humor, Parenting & Life Insights">
    <meta property="og:description" content="Discover Juan Avila's insightful and entertaining books on humor, parenting, and life management.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://juan-avila.com">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'brand-blue': '#3B82F6',
                        'brand-red': '#EF4444',
                        'brand-blue-light': '#DBEAFE',
                        'brand-red-light': '#FEE2E2',
                    },
                    fontFamily: {
                        'serif': ['Georgia', 'serif'],
                        'sans': ['Inter', 'system-ui', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Custom Styles -->
    <style>
        .font-display { font-family: 'Playfair Display', serif; }
        .font-body { font-family: 'Inter', sans-serif; }
        
        .gradient-bg {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 100%);
        }
        
        .card-shadow {
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        .hover-lift {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        
        .hover-lift:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px -10px rgba(0, 0, 0, 0.15);
        }
        
        .book-glow {
            box-shadow: 0 0 30px rgba(59, 130, 246, 0.3);
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out;
        }
        
        .animate-delay-200 {
            animation-delay: 0.2s;
            animation-fill-mode: both;
        }
        
        .animate-delay-400 {
            animation-delay: 0.4s;
            animation-fill-mode: both;
        }
        
        .animate-delay-600 {
            animation-delay: 0.6s;
            animation-fill-mode: both;
        }
    </style>
</head>

<body class="font-body bg-gradient-to-br from-slate-50 to-blue-50 min-h-screen">
    
    <!-- Navigation -->
    <nav class="fixed top-0 w-full bg-white/80 backdrop-blur-md z-50 border-b border-gray-200">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="font-display text-2xl font-bold text-gray-900">
                    Juan Avila
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="#home" class="text-gray-700 hover:text-brand-blue transition-colors duration-200">Home</a>
                    <a href="#about" class="text-gray-700 hover:text-brand-blue transition-colors duration-200">About</a>
                    <a href="#book" class="text-gray-700 hover:text-brand-blue transition-colors duration-200">My Book</a>
                    <a href="#contact" class="text-gray-700 hover:text-brand-blue transition-colors duration-200">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="pt-24 pb-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Author Portrait -->
                <div class="flex justify-center lg:justify-start animate-fade-in-up">
                    <div class="relative">
                        <!-- Placeholder for portrait - replace src with actual image -->
                        <div class="w-80 h-80 rounded-full bg-gradient-to-br from-brand-blue-light to-brand-red-light flex items-center justify-center card-shadow">
                            <div class="text-center text-gray-600">
                                <svg class="w-24 h-24 mx-auto mb-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                                </svg>
                                <p class="text-sm">Portrait Photo<br>Placeholder</p>
                            </div>
                        </div>
                        <!-- Uncomment and use when you have the actual photo -->
                        <!-- <img src="{{ asset('images/juan-avila-portrait.jpg') }}" alt="Juan Avila Portrait" class="w-80 h-80 rounded-full object-cover card-shadow"> -->
                        
                        <!-- Decorative elements -->
                        <div class="absolute -top-4 -right-4 w-20 h-20 bg-brand-red/20 rounded-full blur-xl"></div>
                        <div class="absolute -bottom-6 -left-6 w-24 h-24 bg-brand-blue/20 rounded-full blur-xl"></div>
                    </div>
                </div>

                <!-- Introduction -->
                <div class="text-center lg:text-left animate-fade-in-up animate-delay-200">
                    <h1 class="font-display text-5xl lg:text-6xl font-bold text-gray-900 mb-6 leading-tight">
                        Juan Avila
                    </h1>
                    <p class="text-xl lg:text-2xl text-gray-600 mb-8 leading-relaxed">
                        Bringing humor and insight to the beautiful chaos of parenting and everyday life. 
                        <span class="text-brand-blue font-medium">Because sometimes laughter really is the best medicine.</span>
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="#book" class="inline-flex items-center px-8 py-4 bg-brand-blue text-white font-semibold rounded-lg hover:bg-blue-600 transition-all duration-200 hover-lift">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                            </svg>
                            Discover My Book
                        </a>
                        <a href="#contact" class="inline-flex items-center px-8 py-4 border-2 border-brand-red text-brand-red font-semibold rounded-lg hover:bg-brand-red hover:text-white transition-all duration-200 hover-lift">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            Get in Touch
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="animate-fade-in-up">
                <h2 class="font-display text-4xl font-bold text-gray-900 mb-8">About the Author</h2>
                <div class="prose prose-lg mx-auto text-gray-600 leading-relaxed">
                    <p class="text-xl mb-6">
                        Juan Avila is a writer who finds extraordinary humor in ordinary moments. With a keen eye for the absurdities of daily life and a talent for turning frustrations into laughter, Juan has become a voice that resonates with parents and anyone navigating life's unexpected challenges.
                    </p>
                    <p class="text-lg">
                        His writing combines wit with wisdom, offering readers not just entertainment but genuine insights into managing stress, finding joy in chaos, and discovering that sometimes the best way to handle life's curveballs is to laugh at them.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Book Section -->
    <section id="book" class="py-20 gradient-bg">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 animate-fade-in-up">
                <h2 class="font-display text-4xl lg:text-5xl font-bold text-gray-900 mb-4">Featured Book</h2>
                <p class="text-xl text-gray-600">Discover stories that will make you laugh, think, and feel less alone in this beautiful mess we call life.</p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Book Cover -->
                <div class="flex justify-center animate-fade-in-up animate-delay-200">
                    <div class="relative">
                        <!-- Placeholder for book cover - replace with actual book cover -->
                        <div class="w-80 h-96 bg-gradient-to-br from-brand-blue to-brand-red rounded-lg flex items-center justify-center card-shadow book-glow">
                            <div class="text-center text-white">
                                <svg class="w-16 h-16 mx-auto mb-4" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"></path>
                                </svg>
                                <p class="font-semibold">Book Cover<br>Coming Soon</p>
                            </div>
                        </div>
                        <!-- Uncomment when you have the actual book cover -->
                        <!-- <img src="{{ asset('images/book-cover.jpg') }}" alt="Book Cover" class="w-80 h-96 rounded-lg object-cover card-shadow book-glow"> -->
                    </div>
                </div>

                <!-- Book Details -->
                <div class="animate-fade-in-up animate-delay-400">
                    <h3 class="font-display text-3xl lg:text-4xl font-bold text-gray-900 mb-6">
                        [Book Title Here]
                        <span class="block text-lg font-normal text-brand-blue mt-2">A Journey Through Humor and Parenting</span>
                    </h3>
                    
                    <div class="prose prose-lg text-gray-600 mb-8">
                        <p class="text-lg leading-relaxed mb-4">
                            This book explores the intersection of humor, parenting, and anger management through relatable stories and practical insights. Juan Avila shares personal anecdotes and observations that will resonate with anyone who has ever felt overwhelmed by life's daily challenges.
                        </p>
                        <p class="text-base">
                            From navigating toddler tantrums to finding patience in chaos, this collection offers both laughter and wisdom for modern parents and anyone seeking a lighter perspective on life's inevitable frustrations.
                        </p>
                    </div>

                    <!-- Buy Links -->
                    <div class="space-y-4">
                        <h4 class="font-semibold text-gray-900 text-lg mb-4">Available Now:</h4>
                        <div class="grid sm:grid-cols-2 gap-4">
                            <a href="#" class="flex items-center justify-center px-6 py-3 bg-yellow-400 text-gray-900 font-semibold rounded-lg hover:bg-yellow-500 transition-colors duration-200 hover-lift">
                                <svg class="w-5 h-5 mr-2" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12 2L13.5 8.5L20 7L14.5 12L20 17.5L13.5 16L12 22L10.5 16L4 17.5L9.5 12L4 7L10.5 8.5L12 2Z"/>
                                </svg>
                                Amazon
                            </a>
                            <a href="#" class="flex items-center justify-center px-6 py-3 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-colors duration-200 hover-lift">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"></path>
                                </svg>
                                Barnes & Noble
                            </a>
                            <a href="#" class="flex items-center justify-center px-6 py-3 bg-gray-800 text-white font-semibold rounded-lg hover:bg-gray-900 transition-colors duration-200 hover-lift">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                                Kindle
                            </a>
                            <a href="#" class="flex items-center justify-center px-6 py-3 bg-green-600 text-white font-semibold rounded-lg hover:bg-green-700 transition-colors duration-200 hover-lift">
                                <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z"></path>
                                </svg>
                                Apple Books
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12 animate-fade-in-up">
                <h2 class="font-display text-4xl font-bold text-gray-900 mb-4">Get in Touch</h2>
                <p class="text-xl text-gray-600">Have questions, feedback, or just want to say hello? I'd love to hear from you.</p>
            </div>

            <div class="grid md:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="animate-fade-in-up animate-delay-200">
                    <form action="#" method="POST" class="space-y-6">
                        @csrf
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                            <input type="text" id="name" name="name" required 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-blue focus:border-transparent transition-colors duration-200">
                        </div>
                        
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                            <input type="email" id="email" name="email" required 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-blue focus:border-transparent transition-colors duration-200">
                        </div>
                        
                        <div>
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">Subject</label>
                            <input type="text" id="subject" name="subject" 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-blue focus:border-transparent transition-colors duration-200">
                        </div>
                        
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-2">Message</label>
                            <textarea id="message" name="message" rows="6" required 
                                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-brand-blue focus:border-transparent transition-colors duration-200 resize-none"></textarea>
                        </div>
                        
                        <button type="submit" 
                                class="w-full px-8 py-4 bg-brand-blue text-white font-semibold rounded-lg hover:bg-blue-600 transition-colors duration-200 hover-lift">
                            Send Message
                        </button>
                    </form>
                </div>

                <!-- Contact Information -->
                <div class="animate-fade-in-up animate-delay-400">
                    <div class="bg-gray-50 rounded-xl p-8 h-full">
                        <h3 class="font-display text-2xl font-bold text-gray-900 mb-6">Let's Connect</h3>
                        
                        <div class="space-y-6">
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0">
                                    <svg class="w-6 h-6 text-brand-blue mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Email</h4>
                                    <p class="text-gray-600">contact@juan-avila.com</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0">
                                    <svg class="w-6 h-6 text-brand-blue mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Response Time</h4>
                                    <p class="text-gray-600">Usually within 24-48 hours</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0">
                                    <svg class="w-6 h-6 text-brand-blue mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-semibold text-gray-900">Speaking Engagements</h4>
                                    <p class="text-gray-600">Available for book clubs, events, and interviews</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-8 pt-8 border-t border-gray-200">
                            <p class="text-sm text-gray-600 leading-relaxed">
                                Whether you're a fellow parent looking to share experiences, a reader with feedback, or interested in collaborating, I'd love to connect with you.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-3 gap-8">
                <div>
                    <h3 class="font-display text-2xl font-bold mb-4">Juan Avila</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Author, humorist, and finder of joy in life's everyday chaos. 
                        Bringing laughter to the beautiful mess of parenting and beyond.
                    </p>
                </div>
                
                <div>
                    <h4 class="font-semibold text-lg mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-gray-400 hover:text-white transition-colors duration-200">Home</a></li>
                        <li><a href="#about" class="text-gray-400 hover:text-white transition-colors duration-200">About</a></li>
                        <li><a href="#book" class="text-gray-400 hover:text-white transition-colors duration-200">My Book</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-white transition-colors duration-200">Contact</a></li>
                    </ul>
                </div>
                
                <div>
                    <h4 class="font-semibold text-lg mb-4">Topics</h4>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-brand-blue/20 text-brand-blue text-sm rounded-full">Humor</span>
                        <span class="px-3 py-1 bg-brand-red/20 text-brand-red text-sm rounded-full">Parenting</span>
                        <span class="px-3 py-1 bg-gray-700 text-gray-300 text-sm rounded-full">Life Insights</span>
                        <span class="px-3 py-1 bg-gray-700 text-gray-300 text-sm rounded-full">Anger Management</span>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-8 pt-8 text-center">
                <p class="text-gray-400">
                    © {{ date('Y') }} Juan Avila. All rights reserved. | 
                    <a href="mailto:contact@juan-avila.com" class="hover:text-white transition-colors duration-200">contact@juan-avila.com</a>
                </p>
            </div>
        </div>
    </footer>

    <!-- Smooth Scrolling Script -->
    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add scroll effect to navigation
        window.addEventListener('scroll', function() {
            const nav = document.querySelector('nav');
            if (window.scrollY > 100) {
                nav.classList.add('shadow-lg');
            } else {
                nav.classList.remove('shadow-lg');
            }
        });

        // Form submission handling
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            const name = formData.get('name');
            const email = formData.get('email');
            const subject = formData.get('subject');
            const message = formData.get('message');
            
            // Simple validation
            if (!name || !email || !message) {
                alert('Please fill in all required fields.');
                return;
            }
            
            // Show success message (replace with actual form submission logic)
            alert('Thank you for your message! Juan will get back to you soon.');
            this.reset();
        });

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fade-in-up');
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('section > div').forEach(el => {
            observer.observe(el);
        });
    </script>
</body>
</html>