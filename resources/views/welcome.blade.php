<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juan Avila - Author | Humor, Parenting & Life Insights</title>

    <!-- SEO Meta Tags -->
    <meta name="description"
        content="Juan Avila, author specializing in humor, parenting, and anger management. Discover insightful and entertaining books that bring laughter to everyday life challenges.">
    <meta name="keywords"
        content="Juan Avila, author, humor books, parenting books, anger management, comedy writer, family humor, life insights">
    <meta name="author" content="Juan Avila">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Juan Avila - Author | Humor, Parenting & Life Insights">
    <meta property="og:description"
        content="Discover Juan Avila's insightful and entertaining books on humor, parenting, and life management.">
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
                        'brand-dark': '#1e293b',
                        'brand-light': '#f8fafc',
                    },
                    fontFamily: {
                        'display': ['Playfair Display', 'serif'],
                        'body': ['Inter', 'system-ui', 'sans-serif'],
                    },
                    animation: {
                        'float': 'float 6s ease-in-out infinite',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                        'gradient': 'gradient 15s ease infinite',
                        'blob': 'blob 7s infinite',
                    },
                    keyframes: {
                        gradient: {
                            '0%, 100%': {
                                'background-size': '200% 200%',
                                'background-position': 'left center'
                            },
                            '50%': {
                                'background-size': '200% 200%',
                                'background-position': 'right center'
                            },
                        },
                        blob: {
                            '0%': {
                                transform: 'translate(0px, 0px) scale(1)',
                            },
                            '33%': {
                                transform: 'translate(30px, -50px) scale(1.1)',
                            },
                            '66%': {
                                transform: 'translate(-20px, 20px) scale(0.9)',
                            },
                            '100%': {
                                transform: 'translate(0px, 0px) scale(1)',
                            },
                        }
                    }
                }
            }
        }
    </script>

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .gradient-text {
            background: linear-gradient(135deg, #3B82F6, #EF4444);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .animated-gradient {
            background: linear-gradient(-45deg, #3B82F6, #EF4444, #8B5CF6, #06B6D4);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
        }

        .card-hover {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .card-hover:hover {
            transform: translateY(-8px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }

        .floating-animation {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        .slide-in {
            transform: translateX(-100%);
            transition: transform 0.3s ease-in-out;
        }

        .slide-in.active {
            transform: translateX(0);
        }

        /* Mobile menu styles */
        .mobile-menu {
            transform: translateX(100%);
            transition: transform 0.3s ease-in-out;
        }

        .mobile-menu.active {
            transform: translateX(0);
        }

        /* Modern background patterns */
        .bg-pattern {
            background-image:
                radial-gradient(circle at 25% 25%, rgba(59, 130, 246, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 75% 75%, rgba(239, 68, 68, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 75% 25%, rgba(139, 92, 246, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 25% 75%, rgba(6, 182, 212, 0.1) 0%, transparent 50%);
        }

        .mesh-gradient {
            background: linear-gradient(45deg, rgba(59, 130, 246, 0.1) 0%, rgba(239, 68, 68, 0.1) 100%);
            background-size: 400% 400%;
            animation: gradient 20s ease infinite;
        }

        .blob {
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            animation: blob 7s infinite;
        }

        .noise-texture {
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.4'/%3E%3C/svg%3E");
        }

        .geometric-bg {
            background-image:
                linear-gradient(45deg, rgba(59, 130, 246, 0.05) 25%, transparent 25%),
                linear-gradient(-45deg, rgba(239, 68, 68, 0.05) 25%, transparent 25%),
                linear-gradient(45deg, transparent 75%, rgba(59, 130, 246, 0.05) 75%),
                linear-gradient(-45deg, transparent 75%, rgba(239, 68, 68, 0.05) 75%);
            background-size: 60px 60px;
            background-position: 0 0, 0 30px, 30px -30px, -30px 0px;
        }
    </style>

    <style>
        .gradient-text {
            background: linear-gradient(135deg, #3B82F6 0%, #EF4444 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-2px);
            box-shadow: 0 20px 40px rgba(59, 130, 246, 0.15);
        }

        .floating-elements {
            position: absolute;
            width: 100%;
            height: 100%;
            overflow: hidden;
            pointer-events: none;
        }

        .floating-shape {
            position: absolute;
            border-radius: 50%;
            opacity: 0.1;
            animation: float 6s ease-in-out infinite;
        }

        .floating-shape:nth-child(1) {
            width: 100px;
            height: 100px;
            background: #3B82F6;
            top: 10%;
            left: 10%;
            animation-delay: 0s;
        }

        .floating-shape:nth-child(2) {
            width: 60px;
            height: 60px;
            background: #EF4444;
            top: 60%;
            right: 15%;
            animation-delay: 2s;
        }

        .floating-shape:nth-child(3) {
            width: 80px;
            height: 80px;
            background: #3B82F6;
            bottom: 20%;
            left: 70%;
            animation-delay: 4s;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(-20px) rotate(10deg);
            }
        }

        .glass-effect {
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        /* .mesh-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            background-size: 400% 400%;
            animation: gradientShift 8s ease infinite;
        } */

        @keyframes gradientShift {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        .contact-bg {
            background: linear-gradient(135deg, #f8fafc 0%, #e2e8f0 50%, #f1f5f9 100%);
            position: relative;
        }

        .contact-bg::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 30% 20%, rgba(59, 130, 246, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 70% 80%, rgba(239, 68, 68, 0.1) 0%, transparent 50%);
            pointer-events: none;
        }

        .footer-bg {
            background: linear-gradient(135deg, #1f2937 0%, #111827 50%, #0f172a 100%);
            position: relative;
        }

        .footer-bg::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background:
                radial-gradient(circle at 20% 30%, rgba(59, 130, 246, 0.15) 0%, transparent 40%),
                radial-gradient(circle at 80% 70%, rgba(239, 68, 68, 0.15) 0%, transparent 40%),
                linear-gradient(180deg, transparent 0%, rgba(0, 0, 0, 0.3) 100%);
            pointer-events: none;
        }

        .pattern-overlay {
            background-image:
                radial-gradient(circle at 1px 1px, rgba(255, 255, 255, 0.05) 1px, transparent 0);
            background-size: 20px 20px;
        }

        .input-glow:focus {
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1), 0 0 20px rgba(59, 130, 246, 0.1);
        }

        .pulse-ring {
            animation: pulse-ring 2s cubic-bezier(0.455, 0.03, 0.515, 0.955) infinite;
        }

        @keyframes pulse-ring {
            0% {
                transform: scale(0.8);
                opacity: 1;
            }

            100% {
                transform: scale(2.4);
                opacity: 0;
            }
        }
    </style>
</head>

<body class="font-body bg-white text-gray-900 overflow-x-hidden">

    <!-- Navigation -->
    <nav class="fixed top-0 w-full bg-white/80 backdrop-blur-md z-50 border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="font-display text-2xl font-bold gradient-text">
                    Juan Avila
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex space-x-8">
                    <a href="#home"
                        class="text-gray-700 hover:text-brand-blue transition-colors duration-200 font-medium">Home</a>
                    <a href="#about"
                        class="text-gray-700 hover:text-brand-blue transition-colors duration-200 font-medium">About</a>
                    <a href="#book"
                        class="text-gray-700 hover:text-brand-blue transition-colors duration-200 font-medium">Book</a>
                    <a href="#writing"
                        class="text-gray-700 hover:text-brand-blue transition-colors duration-200 font-medium">Writing</a>
                    <a href="#contact"
                        class="text-gray-700 hover:text-brand-blue transition-colors duration-200 font-medium">Contact</a>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden">
                    <button id="mobile-menu-btn" class="text-gray-700 hover:text-brand-blue p-2">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Navigation Menu -->
        <div id="mobile-menu" class="mobile-menu fixed top-16 right-0 w-full h-screen bg-white shadow-lg md:hidden">
            <div class="px-4 py-8 space-y-6">
                <a href="#home"
                    class="block text-xl font-medium text-gray-700 hover:text-brand-blue transition-colors">Home</a>
                <a href="#about"
                    class="block text-xl font-medium text-gray-700 hover:text-brand-blue transition-colors">About</a>
                <a href="#book"
                    class="block text-xl font-medium text-gray-700 hover:text-brand-blue transition-colors">Book</a>
                <a href="#writing"
                    class="block text-xl font-medium text-gray-700 hover:text-brand-blue transition-colors">Writing</a>
                <a href="#contact"
                    class="block text-xl font-medium text-gray-700 hover:text-brand-blue transition-colors">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home"
        class="min-h-screen flex items-center justify-center relative overflow-hidden bg-gradient-to-br from-blue-50 via-white to-red-50">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0">
            <!-- Large animated blobs -->
            <div
                class="absolute top-20 left-10 w-96 h-96 bg-gradient-to-r from-brand-blue/20 to-brand-red/20 rounded-full blur-3xl blob">
            </div>
            <div
                class="absolute bottom-20 right-10 w-80 h-80 bg-gradient-to-r from-brand-red/15 to-purple-400/15 rounded-full blur-3xl blob animation-delay-2000">
            </div>
            <div
                class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-72 h-72 bg-gradient-to-r from-cyan-400/10 to-brand-blue/10 rounded-full blur-3xl blob animation-delay-4000">
            </div>

            <!-- Geometric pattern overlay -->
            <div class="absolute inset-0 geometric-bg opacity-30"></div>

            <!-- Floating particles -->
            <div class="absolute top-1/4 left-1/4 w-2 h-2 bg-brand-blue/30 rounded-full animate-pulse-slow"></div>
            <div
                class="absolute top-3/4 right-1/4 w-3 h-3 bg-brand-red/30 rounded-full animate-pulse-slow animation-delay-1000">
            </div>
            <div
                class="absolute top-1/2 right-1/3 w-1 h-1 bg-purple-400/40 rounded-full animate-pulse-slow animation-delay-2000">
            </div>
            <div
                class="absolute bottom-1/4 left-1/3 w-2 h-2 bg-cyan-400/30 rounded-full animate-pulse-slow animation-delay-3000">
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <!-- Text Content -->
                <div class="text-center lg:text-left">
                    <h1 class="text-5xl lg:text-7xl font-display font-bold mb-6 leading-tight">
                        Hi, I'm <span class="gradient-text">Juan Avila</span>
                    </h1>
                    <p class="text-xl lg:text-2xl text-gray-600 mb-8 leading-relaxed">
                        I transform everyday chaos into laughter. Author, humorist, and your guide through the beautiful
                        mess of parenting and life.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="#book"
                            class="inline-flex items-center px-8 py-4 bg-brand-blue text-white font-semibold rounded-full hover:bg-blue-600 hover:shadow-xl transition-all duration-300 card-hover">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                </path>
                            </svg>
                            Read My Book
                        </a>
                        <a href="#contact"
                            class="inline-flex items-center px-8 py-4 border-2 border-brand-red text-brand-red font-semibold rounded-full hover:bg-brand-red hover:text-white hover:shadow-xl transition-all duration-300 card-hover">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                </path>
                            </svg>
                            Let's Talk
                        </a>
                    </div>
                </div>

                <!-- Author Image -->
                <div class="flex justify-center lg:justify-end">
                    <div class="relative floating-animation">
                        <div
                            class="w-80 h-80 lg:w-96 lg:h-96 rounded-3xl bg-gradient-to-br from-brand-blue via-purple-500 to-brand-red p-1 shadow-2xl">
                            <div
                                class="w-full h-full rounded-3xl bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center relative overflow-hidden">
                                <!-- Subtle pattern inside image placeholder -->
                                <img src="{{ asset('images/author.jpg') }}" alt="Juan Avila"
                                    class="w-full h-full object-cover rounded-3xl">
                                {{-- <div class="absolute inset-0 bg-pattern opacity-20"></div> --}}
                                {{-- <img src="https://via.placeholder.com/300x400" alt="Author Image" class="w-full h-full object-cover rounded-3xl"> --}}
                                {{-- <div class="absolute inset-0 bg-pattern opacity-20"></div>
                                <svg class="w-32 h-32 text-gray-400 relative z-10" fill="currentColor"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                        clip-rule="evenodd"></path>
                                </svg> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-24 relative overflow-hidden">
        <!-- Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-gray-50 via-blue-50/50 to-red-50/50">
            <div class="absolute inset-0 mesh-gradient"></div>
            <div
                class="absolute top-20 right-20 w-64 h-64 bg-gradient-to-r from-brand-blue/10 to-transparent rounded-full blur-2xl">
            </div>
            <div
                class="absolute bottom-20 left-20 w-80 h-80 bg-gradient-to-r from-brand-red/10 to-transparent rounded-full blur-2xl">
            </div>
        </div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
            <h2 class="text-4xl lg:text-5xl font-display font-bold mb-8 gradient-text">About Juan</h2>
            <div class="prose prose-xl mx-auto text-gray-600 leading-relaxed">
                <p class="text-xl mb-8">
                    I'm a writer who believes that laughter is not just medicine—it's a survival tool. With years of
                    experience navigating the wonderful chaos of parenting and everyday life, I've learned that
                    sometimes the best way to handle life's curveballs is to find the humor in them.
                </p>
                <p class="text-lg">
                    My writing combines personal stories with practical insights, offering readers both entertainment
                    and genuine wisdom for managing stress, finding joy in unexpected places, and discovering that we're
                    all just figuring it out as we go along.
                </p>
            </div>
        </div>
    </section>

   <!-- Book Section -->
<section id="book" class="py-20 bg-gradient-to-br from-gray-50 via-white to-blue-50/30 relative overflow-hidden">
    <!-- Subtle Background Elements -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-20 right-1/4 w-64 h-64 bg-gradient-to-r from-blue-400/8 to-red-400/8 rounded-full blur-3xl"></div>
        <div class="absolute bottom-32 left-1/4 w-72 h-72 bg-gradient-to-r from-red-400/6 to-blue-500/6 rounded-full blur-3xl"></div>
    </div>

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                My <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-red-500">Latest Book</span>
            </h2>
            <p class="text-lg md:text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                A humorous journey through the chaos of parenting, filled with insights on finding patience and joy in life's most challenging moments.
            </p>
        </div>

        <!-- Book Content Grid -->
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <!-- Book Cover -->
            <div class="flex justify-center lg:justify-end">
                <div class="relative group">
                    <!-- Shadow backdrop -->
                    <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-red-500 rounded-2xl blur-xl opacity-20 group-hover:opacity-30 transition-opacity duration-300"></div>

                    <!-- Book cover container -->
                    <div class="relative w-72 h-96 md:w-80 md:h-[440px] bg-white rounded-2xl shadow-2xl overflow-hidden transform group-hover:scale-105 transition-all duration-300">
                        <!-- Placeholder for book cover image -->
                        <div class="w-full h-full bg-gradient-to-br from-blue-500 via-purple-600 to-red-500 flex items-center justify-center relative">
                            <!-- Replace this div with actual book cover image -->
                            <img src="images/book-cover.jpg" alt="Finding Laughter in the Chaos - Book Cover"
                                 class="w-full h-full object-cover"
                                 onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">

                            <!-- Fallback content if image doesn't load -->
                            <div class="absolute inset-0 flex flex-col items-center justify-center text-white p-8 text-center" style="display: none;">
                                <h3 class="text-2xl md:text-3xl font-bold mb-2 leading-tight">Finding Laughter in the Chaos</h3>
                                <p class="text-sm md:text-base opacity-90 mb-4">A Parent's Guide to Surviving with Humor</p>
                                <p class="text-lg font-semibold">Juan Avila</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Book Details -->
            <div class="space-y-8">
                <div>
                    <h3 class="text-2xl md:text-3xl lg:text-4xl font-bold text-gray-900 mb-3 leading-tight">
                        Finding Laughter in the Chaos
                    </h3>
                    <p class="text-lg md:text-xl text-blue-600 font-medium mb-6">
                        A Parent's Guide to Surviving with Humor
                    </p>

                    <p class="text-base md:text-lg text-gray-700 leading-relaxed mb-8">
                        This book explores the intersection of humor, parenting, and personal growth through relatable stories and practical insights.
                        From navigating toddler tantrums to finding patience in chaos, discover how laughter can be your greatest parenting tool and
                        a pathway to better anger management and emotional well-being.
                    </p>
                </div>

                <!-- Purchase Links -->
                <div class="space-y-6">
                    <h4 class="text-xl font-bold text-gray-900">Get Your Copy:</h4>

                    <div class="grid gap-4">
                        <!-- Amazon Link -->
                        <a href="#" class="group flex items-center justify-between p-4 bg-white border-2 border-gray-100 rounded-xl hover:border-blue-300 hover:shadow-lg transition-all duration-300">
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-gradient-to-r from-yellow-400 to-orange-400 rounded-lg flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M12 2L13.5 8.5L20 7L14.5 12L20 17.5L13.5 16L12 22L10.5 16L4 17.5L9.5 12L4 7L10.5 8.5L12 2Z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-900">Amazon</p>
                                    <p class="text-sm text-gray-600">Paperback & Kindle</p>
                                </div>
                            </div>
                            <svg class="w-5 h-5 text-gray-400 group-hover:text-blue-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>

                        <!-- Barnes & Noble Link -->
                        <a href="#" class="group flex items-center justify-between p-4 bg-white border-2 border-gray-100 rounded-xl hover:border-red-300 hover:shadow-lg transition-all duration-300">
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-green-600 rounded-lg flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-900">Barnes & Noble</p>
                                    <p class="text-sm text-gray-600">Online & In-store</p>
                                </div>
                            </div>
                            <svg class="w-5 h-5 text-gray-400 group-hover:text-red-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>

                        <!-- Apple Books Link -->
                        <a href="#" class="group flex items-center justify-between p-4 bg-white border-2 border-gray-100 rounded-xl hover:border-blue-300 hover:shadow-lg transition-all duration-300">
                            <div class="flex items-center">
                                <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-600 rounded-lg flex items-center justify-center mr-4">
                                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-semibold text-gray-900">Apple Books</p>
                                    <p class="text-sm text-gray-600">Digital Edition</p>
                                </div>
                            </div>
                            <svg class="w-5 h-5 text-gray-400 group-hover:text-blue-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Call to Action -->
                <div class="p-6 bg-gradient-to-r from-blue-50 to-red-50 rounded-xl border border-gray-100">
                    <p class="text-gray-700 text-center">
                        <span class="font-semibold">Join thousands of parents</span> who have discovered the power of humor in parenting.
                        Get your copy today and start finding laughter in the chaos!
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Writing/Blog Section -->
    <section id="writing" class="py-24 relative overflow-hidden">
        <!-- Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-red-50/50 via-gray-50 to-blue-50/50">
            <div class="absolute inset-0 geometric-bg opacity-20"></div>
            <div
                class="absolute top-20 left-1/4 w-96 h-96 bg-gradient-to-r from-brand-blue/10 to-brand-red/10 rounded-full blur-3xl blob">
            </div>
            <div
                class="absolute bottom-20 right-1/4 w-80 h-80 bg-gradient-to-r from-purple-400/10 to-cyan-400/10 rounded-full blur-3xl blob animation-delay-3000">
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-display font-bold mb-4 gradient-text">Latest Thoughts</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">Fresh perspectives on parenting, humor, and finding
                    joy in everyday moments.</p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Blog Post 1 -->
                <article
                    class="bg-white/80 backdrop-blur-sm rounded-2xl p-8 shadow-lg card-hover border border-white/20">
                    <div
                        class="w-12 h-12 bg-gradient-to-r from-brand-blue/20 to-brand-blue/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-brand-blue" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4">The Art of Laughing at Tantrums</h3>
                    <p class="text-gray-600 mb-4">How I learned to find humor in my toddler's epic meltdowns and why it
                        saved my sanity.</p>
                    <a href="#" class="text-brand-blue font-semibold hover:text-blue-700 transition-colors">Read More
                        →</a>
                </article>

                <!-- Blog Post 2 -->
                <article
                    class="bg-white/80 backdrop-blur-sm rounded-2xl p-8 shadow-lg card-hover border border-white/20">
                    <div
                        class="w-12 h-12 bg-gradient-to-r from-brand-red/20 to-brand-red/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-brand-red" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Why Imperfect Parents Are the Best</h3>
                    <p class="text-gray-600 mb-4">Embracing mistakes, finding grace, and teaching our kids that
                        perfection is overrated.</p>
                    <a href="#" class="text-brand-blue font-semibold hover:text-blue-700 transition-colors">Read More
                        →</a>
                </article>

                <!-- Blog Post 3 -->
                <article
                    class="bg-white/80 backdrop-blur-sm rounded-2xl p-8 shadow-lg card-hover border border-white/20">
                    <div
                        class="w-12 h-12 bg-gradient-to-r from-green-500/20 to-green-500/10 rounded-xl flex items-center justify-center mb-6">
                        <svg class="w-6 h-6 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4">Finding Your Voice as a Writer</h3>
                    <p class="text-gray-600 mb-4">My journey from frustrated parent to published author, and how you can
                        tell your story too.</p>
                    <a href="#" class="text-brand-blue font-semibold hover:text-blue-700 transition-colors">Read More
                        →</a>
                </article>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-24 contact-bg relative overflow-hidden">
        <!-- Floating Background Elements -->
        <div class="floating-elements">
            <div class="floating-shape"></div>
            <div class="floating-shape"></div>
            <div class="floating-shape"></div>
        </div>

        <!-- Pattern Overlay -->
        <div class="absolute inset-0 pattern-overlay opacity-30"></div>

        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-4xl lg:text-5xl font-bold font-playfair mb-4 gradient-text">Let's Connect</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto leading-relaxed">Have questions, feedback, or just
                    want to share your own parenting stories? I'd love to hear from you.</p>
            </div>

            <div class="grid md:grid-cols-2 gap-12">
                <!-- Contact Form -->
                <div class="bg-white/80 backdrop-blur-sm rounded-3xl p-8 shadow-2xl border border-white/20 card-hover">
                    <form class="space-y-6">
                        <div>
                            <label for="name" class="block text-sm font-semibold text-gray-700 mb-2 font-inter">Full
                                Name</label>
                            <input type="text" id="name" name="name" required
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-brand-blue focus:border-transparent transition-all duration-300 input-glow bg-white/70">
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-semibold text-gray-700 mb-2 font-inter">Email
                                Address</label>
                            <input type="email" id="email" name="email" required
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-brand-blue focus:border-transparent transition-all duration-300 input-glow bg-white/70">
                        </div>

                        <div>
                            <label for="message"
                                class="block text-sm font-semibold text-gray-700 mb-2 font-inter">Message</label>
                            <textarea id="message" name="message" rows="6" required
                                class="w-full px-4 py-3 border border-gray-200 rounded-xl focus:ring-2 focus:ring-brand-blue focus:border-transparent transition-all duration-300 resize-none input-glow bg-white/70"></textarea>
                        </div>

                        <button type="submit"
                            class="w-full px-8 py-4 bg-gradient-to-r from-brand-blue to-brand-red text-white font-semibold rounded-xl hover:from-blue-700 hover:to-red-600 transition-all duration-300 card-hover shadow-lg relative overflow-hidden">
                            <span class="relative z-10">Send Message</span>
                            <div
                                class="absolute inset-0 bg-gradient-to-r from-brand-red to-brand-blue opacity-0 hover:opacity-100 transition-opacity duration-300">
                            </div>
                        </button>
                    </form>
                </div>

                <!-- Contact Information -->
                <div class="space-y-8">
                    <div class="text-center md:text-left">
                        <h3 class="text-2xl font-bold font-playfair mb-6 text-gray-900">Get in Touch</h3>
                        <p class="text-gray-600 mb-8 leading-relaxed">
                            Whether you're a fellow parent, a reader, or interested in collaborating, I'm always excited
                            to connect with people who find joy in life's beautiful chaos.
                        </p>
                    </div>

                    <div class="space-y-6">
                        <div
                            class="flex items-center space-x-4 p-6 bg-gradient-to-r from-blue-50 to-blue-100/50 rounded-2xl card-hover border border-blue-200/50">
                            <div
                                class="w-12 h-12 bg-brand-blue/20 rounded-xl flex items-center justify-center relative">
                                <div class="absolute inset-0 bg-brand-blue/10 rounded-xl pulse-ring"></div>
                                <svg class="w-6 h-6 text-brand-blue relative z-10" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 font-inter">Email</h4>
                                <p class="text-gray-600">hello@juanavila.com</p>
                            </div>
                        </div>

                        <div
                            class="flex items-center space-x-4 p-6 bg-gradient-to-r from-red-50 to-red-100/50 rounded-2xl card-hover border border-red-200/50">
                            <div class="w-12 h-12 bg-brand-red/20 rounded-xl flex items-center justify-center relative">
                                <div class="absolute inset-0 bg-brand-red/10 rounded-xl pulse-ring"></div>
                                <svg class="w-6 h-6 text-brand-red relative z-10" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 font-inter">Response Time</h4>
                                <p class="text-gray-600">Usually within 24-48 hours</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer-bg text-white py-16 relative overflow-hidden">
        <!-- Pattern Overlay -->
        <div class="absolute inset-0 pattern-overlay opacity-20"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid md:grid-cols-3 gap-8 mb-8">
                <div>
                    <h3 class="text-2xl font-bold font-playfair gradient-text mb-4">Juan Avila</h3>
                    <p class="text-gray-300 leading-relaxed mb-6">
                        Transforming everyday chaos into moments of joy and laughter. Author, storyteller, and fellow
                        parent in this beautiful mess called life.
                    </p>
                    <div class="flex space-x-4">
                        <span
                            class="px-4 py-2 bg-gradient-to-r from-brand-blue/20 to-brand-blue/30 text-brand-blue text-sm rounded-full backdrop-blur-sm border border-brand-blue/20">Humor</span>
                        <span
                            class="px-4 py-2 bg-gradient-to-r from-brand-red/20 to-brand-red/30 text-brand-red text-sm rounded-full backdrop-blur-sm border border-brand-red/20">Parenting</span>
                    </div>
                </div>

                <div>
                    <h4 class="font-semibold text-lg mb-4 font-playfair">Quick Links</h4>
                    <ul class="space-y-3">
                        <li><a href="#home"
                                class="text-gray-400 hover:text-white hover:translate-x-2 transition-all duration-300 inline-block">Home</a>
                        </li>
                        <li><a href="#about"
                                class="text-gray-400 hover:text-white hover:translate-x-2 transition-all duration-300 inline-block">About</a>
                        </li>
                        <li><a href="#book"
                                class="text-gray-400 hover:text-white hover:translate-x-2 transition-all duration-300 inline-block">Book</a>
                        </li>
                        <li><a href="#writing"
                                class="text-gray-400 hover:text-white hover:translate-x-2 transition-all duration-300 inline-block">Writing</a>
                        </li>
                        <li><a href="#contact"
                                class="text-gray-400 hover:text-white hover:translate-x-2 transition-all duration-300 inline-block">Contact</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-semibold text-lg mb-4 font-playfair">Stay Connected</h4>
                    <p class="text-gray-400 mb-4">Get updates on new stories and upcoming releases.</p>
                    <div class="flex">
                        <input type="email" placeholder="Your email"
                            class="flex-1 px-4 py-3 bg-white/10 backdrop-blur-sm text-white rounded-l-xl border border-white/20 focus:outline-none focus:border-brand-blue focus:ring-2 focus:ring-brand-blue/30 transition-all duration-300 placeholder-gray-400">
                        <button
                            class="px-6 py-3 bg-gradient-to-r from-brand-blue to-brand-red text-white rounded-r-xl hover:from-blue-700 hover:to-red-600 transition-all duration-300 card-hover">
                            Subscribe
                        </button>
                    </div>
                </div>
            </div>

            <div class="border-t border-white/20 pt-8 text-center">
                <p class="text-gray-400">
                    © 2024 Juan Avila. All rights reserved. |
                    <a href="mailto:hello@juanavila.com"
                        class="hover:text-white transition-colors duration-200 hover:underline">hello@juanavila.com</a>
                </p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // Mobile menu functionality
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        let isMenuOpen = false;

        mobileMenuBtn.addEventListener('click', function () {
            isMenuOpen = !isMenuOpen;

            if (isMenuOpen) {
                mobileMenu.classList.add('active');
                // Change hamburger to X
                mobileMenuBtn.innerHTML = `
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                `;
            } else {
                mobileMenu.classList.remove('active');
                // Change X back to hamburger
                mobileMenuBtn.innerHTML = `
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                `;
            }
        });

        // Close mobile menu when clicking on a link
        const mobileMenuLinks = document.querySelectorAll('#mobile-menu a');
        mobileMenuLinks.forEach(link => {
            link.addEventListener('click', function () {
                isMenuOpen = false;
                mobileMenu.classList.remove('active');
                mobileMenuBtn.innerHTML = `
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                `;
            });
        });

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
        window.addEventListener('scroll', function () {
            const nav = document.querySelector('nav');
            if (window.scrollY > 100) {
                nav.classList.add('shadow-lg');
            } else {
                nav.classList.remove('shadow-lg');
            }
        });

        // Form submission handling
        document.querySelector('form').addEventListener('submit', function (e) {
            e.preventDefault();

            // Get form data
            const formData = new FormData(this);
            const name = formData.get('name');
            const email = formData.get('email');
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

        // Newsletter subscription
        const newsletterForm = document.querySelector('footer .flex');
        if (newsletterForm) {
            newsletterForm.addEventListener('submit', function (e) {
                e.preventDefault();
                const email = this.querySelector('input[type="email"]').value;
                if (email) {
                    alert('Thank you for subscribing! You\'ll hear from Juan soon.');
                    this.querySelector('input[type="email"]').value = '';
                }
            });
        }

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function (entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe sections for animation
        document.querySelectorAll('section').forEach(section => {
            section.style.opacity = '0';
            section.style.transform = 'translateY(30px)';
            section.style.transition = 'opacity 0.8s ease, transform 0.8s ease';
            observer.observe(section);
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', function (e) {
            if (isMenuOpen && !mobileMenu.contains(e.target) && !mobileMenuBtn.contains(e.target)) {
                isMenuOpen = false;
                mobileMenu.classList.remove('active');
                mobileMenuBtn.innerHTML = `
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                `;
            }
        });
    </script>
</body>

</html>
