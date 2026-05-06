<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Alta Digital Agency</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Bricolage+Grotesque:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white font-sans">
    <div class="min-h-screen flex">
        
        <!-- Left Side - Signup Form -->
        <div class="flex-1 flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-md w-full space-y-8">
                <!-- Logo -->
                <div class="text-center">
                    <a href="/">
                        <img src="{{ asset('/images/alta-logo.png') }}" alt="Alta" class="h-12 mx-auto">
                    </a>
                    <h2 class="mt-6 text-3xl font-bold text-navy-900 font-display">Create Account</h2>
                    <p class="mt-2 text-sm text-gray-500">Join Alta and start building</p>
                </div>

                <!-- Signup Form -->
                <form class="mt-8 space-y-6" method="POST" action="{{ route('signup') }}">
                    @csrf
                    
                    <div class="space-y-5">
                        <!-- Name Field -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                            <input id="name" name="name" type="text" required 
                                   value="{{ old('name') }}"
                                   class="input-primary @error('name') input-error @enderror"
                                   placeholder="John Doe">
                            @error('name')
                                <p class="error-message">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Email Field -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                            <input id="email" name="email" type="email" required 
                                   value="{{ old('email') }}"
                                   class="input-primary @error('email') input-error @enderror"
                                   placeholder="you@example.com">
                            @error('email')
                                <p class="error-message">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Password Field -->
                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">Password</label>
                            <input id="password" name="password" type="password" required 
                                   class="input-primary @error('password') input-error @enderror"
                                   placeholder="Create a password">
                            @error('password')
                                <p class="error-message">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Confirm Password Field -->
                        <div>
                            <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">Confirm Password</label>
                            <input id="password_confirmation" name="password_confirmation" type="password" required 
                                   class="input-primary"
                                   placeholder="Confirm your password">
                        </div>

                        <!-- Terms Checkbox -->
                        <div class="flex items-center">
                            <label class="checkbox-wrapper">
                                <input type="checkbox" name="terms" id="terms" class="checkbox-custom mr-2" required>
                                <span class="text-sm text-gray-600">I agree to the <a href="#" class="text-emerald-600">Terms of Service</a></span>
                            </label>
                        </div>
                        @error('terms')
                            <p class="error-message">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" 
                            class="w-full flex justify-center py-3 px-4 border border-transparent text-sm font-semibold text-white bg-emerald-600 hover:bg-emerald-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-emerald-500 transition-all duration-300">
                        Create Account
                    </button>
                </form>

                <!-- Login Link -->
                <div class="text-center">
                    <p class="text-sm text-gray-600">
                        Already have an account?
                        <a href="{{ route('login') }}" class="font-medium text-emerald-600 hover:text-emerald-500">
                            Sign in
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <!-- Right Side - Full Image -->
        <div class="hidden lg:block flex-1 relative">
            <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" 
                 alt="Signup Illustration" 
                 class="absolute inset-0 w-full h-full object-cover">
            
            <!-- Dark Overlay for better text readability -->
            <div class="absolute inset-0 bg-gradient-to-br from-emerald-900/60 to-navy-900/60"></div>
            
            <!-- Content Overlay -->
            <div class="relative z-10 flex flex-col justify-center items-center text-white p-12 text-center h-full">
                <h2 class="text-3xl font-bold mb-4 font-display">Join the Family</h2>
                <p class="text-emerald-100 mb-6 max-w-sm">
                    Get access to premium services, dedicated support, and exclusive resources.
                </p>
                
                <div class="flex flex-col gap-2 text-sm text-emerald-200">
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span>No credit card required</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span>Cancel anytime</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                        </svg>
                        <span>Free updates</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>