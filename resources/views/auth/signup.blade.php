<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up · ALTA Digital Agency</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
        }
        
        .font-display {
            font-family: 'Space Grotesk', 'Inter', system-ui, sans-serif;
        }
        
        .input-field {
            width: 100%;
            padding: 0.875rem 1rem;
            border: 1px solid #e5e7eb;
            background: #ffffff;
            font-size: 0.875rem;
            transition: all 0.2s ease;
            outline: none;
        }
        
        .input-field:focus {
            border-color: #000000;
            box-shadow: none;
        }
        
        .input-field.input-error {
            border-color: #dc2626;
        }
        
        .error-message {
            color: #dc2626;
            font-size: 0.75rem;
            margin-top: 0.5rem;
        }
        
        .btn-signup {
            width: 100%;
            background: #000000;
            color: white;
            padding: 0.875rem 1rem;
            font-size: 0.875rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            border: 1px solid #000000;
            transition: all 0.25s ease;
            cursor: pointer;
        }
        
        .btn-signup:hover {
            background: #1a1a1a;
            transform: translateY(-1px);
        }
        
        .checkbox-wrapper {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            cursor: pointer;
        }
        
        .checkbox-custom {
            width: 1rem;
            height: 1rem;
            border: 1px solid #d1d5db;
            background: white;
            cursor: pointer;
        }
        
        .checkbox-custom:checked {
            background-color: #000000;
            border-color: #000000;
        }
        
        a, button, div, input {
            border-radius: 0 !important;
        }
    </style>
</head>
<body class="bg-white">

<div class="min-h-screen flex flex-col lg:flex-row">
    
    <!-- Left Side - Signup Form -->
    <div class="flex-1 flex items-center justify-center py-12 px-5 sm:px-8">
        <div class="max-w-md w-full">
            
            <!-- Logo -->
            <div class="text-center mb-8">
                <a href="/" class="text-3xl font-bold text-black font-display tracking-tight">
                    ALTA
                </a>
                <h2 class="text-2xl font-bold text-black mt-6 font-display">Create account</h2>
                <p class="text-gray-500 text-sm mt-2">Join ALTA and start building</p>
            </div>

            <!-- Signup Form -->
            <form class="mt-8" method="POST" action="{{ route('signup') }}">
                @csrf
                
                <div class="space-y-5">
                    <!-- Full Name Field -->
                    <div>
                        <label for="name" class="block text-xs font-semibold uppercase tracking-wider text-gray-600 mb-2">Full Name</label>
                        <input id="name" name="name" type="text" required 
                               value="{{ old('name') }}"
                               class="input-field @error('name') input-error @enderror"
                               placeholder="John Doe">
                        @error('name')
                            <p class="error-message">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Email Field -->
                    <div>
                        <label for="email" class="block text-xs font-semibold uppercase tracking-wider text-gray-600 mb-2">Email Address</label>
                        <input id="email" name="email" type="email" required 
                               value="{{ old('email') }}"
                               class="input-field @error('email') input-error @enderror"
                               placeholder="you@example.com">
                        @error('email')
                            <p class="error-message">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password Field -->
                    <div>
                        <label for="password" class="block text-xs font-semibold uppercase tracking-wider text-gray-600 mb-2">Password</label>
                        <input id="password" name="password" type="password" required 
                               class="input-field @error('password') input-error @enderror"
                               placeholder="Create a password">
                        @error('password')
                            <p class="error-message">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Confirm Password Field -->
                    <div>
                        <label for="password_confirmation" class="block text-xs font-semibold uppercase tracking-wider text-gray-600 mb-2">Confirm Password</label>
                        <input id="password_confirmation" name="password_confirmation" type="password" required 
                               class="input-field"
                               placeholder="Confirm your password">
                    </div>

                    <!-- Terms Checkbox -->
                    <div class="flex items-center">
                        <label class="checkbox-wrapper">
                            <input type="checkbox" name="terms" id="terms" class="checkbox-custom" required>
                            <span class="text-sm text-gray-600">I agree to the <a href="#" class="text-black hover:text-gray-600 font-medium">Terms of Service</a></span>
                        </label>
                    </div>
                    @error('terms')
                        <p class="error-message">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn-signup mt-8">
                    Create Account
                </button>
            </form>

            <!-- Login Link -->
            <div class="text-center mt-6">
                <p class="text-sm text-gray-500">
                    Already have an account?
                    <a href="{{ route('login') }}" class="font-semibold text-black hover:text-gray-600 transition-colors">
                        Sign in
                    </a>
                </p>
            </div>
            
            <!-- Divider -->
            <div class="relative my-8">
                <div class="absolute inset-0 flex items-center">
                    <div class="w-full border-t border-gray-200"></div>
                </div>
                <div class="relative flex justify-center text-sm">
                    <span class="px-4 bg-white text-gray-400">Join our community</span>
                </div>
            </div>
            
            <!-- Features -->
            <div class="flex flex-wrap justify-center gap-4 text-xs text-gray-400">
                <div class="flex items-center gap-1">
                    <svg class="w-3 h-3 text-black" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                    </svg>
                    <span>No credit card required</span>
                </div>
                <div class="flex items-center gap-1">
                    <svg class="w-3 h-3 text-black" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                    </svg>
                    <span>Cancel anytime</span>
                </div>
                <div class="flex items-center gap-1">
                    <svg class="w-3 h-3 text-black" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                    </svg>
                    <span>Free updates</span>
                </div>
            </div>
            
        </div>
    </div>

    <!-- Right Side - Full Image -->
    <div class="hidden lg:block flex-1 relative bg-black">
        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-4.0.3&auto=format&fit=crop&w=2070&q=80" 
             alt="Signup Illustration" 
             class="absolute inset-0 w-full h-full object-cover opacity-60">
        
        <!-- Dark Overlay -->
        <div class="absolute inset-0 bg-gradient-to-br from-black/80 via-black/60 to-black/80"></div>
        
        <!-- Content Overlay -->
        <div class="relative z-10 flex flex-col justify-center items-center text-white p-12 text-center h-full">
            <div class="max-w-sm">
                <h2 class="text-3xl font-bold mb-4 font-display">Join the Family</h2>
                <div class="w-12 h-px bg-white/30 mx-auto mb-6"></div>
                <p class="text-white/70 mb-8 leading-relaxed">
                    Get access to premium services, dedicated support, and exclusive resources to grow your digital presence.
                </p>
                <div class="flex flex-col items-center gap-3 text-sm text-white/50">
                    <div class="flex items-center gap-2">
                        <span>✓ Premium Support</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span>✓ Exclusive Resources</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <span>✓ Community Access</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

</body>
</html>