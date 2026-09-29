<?php
    session_start();
    require 'cek_session.php';

// Mendeteksi nama file yang sedang aktif saat ini secara otomatis
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="id" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retro Arcade Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=VT323&display=swap" rel="stylesheet">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        pixel: ['"Press Start 2P"', 'monospace'],
                        vt: ['"VT323"', 'monospace'],
                    },
                    colors: {
                        arcade: {
                            dark: '#0f051d',
                            panel: '#1b0d36',
                            border: '#4c1d95',
                            neonPink: '#ff007f',
                            neonCyan: '#00f0ff',
                            neonGreen: '#39ff14',
                            neonYellow: '#ffe600',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body {
            image-rendering: pixelated;
        }
        /* CRT Scanline overlay */
        .crt::after {
            content: " ";
            display: block;
            position: fixed;
            top: 0; left: 0; bottom: 0; right: 0;
            background: linear-gradient(rgba(18, 16, 16, 0) 50%, rgba(0, 0, 0, 0.25) 50%), linear-gradient(90deg, rgba(255, 0, 0, 0.06), rgba(0, 255, 0, 0.02), rgba(0, 0, 255, 0.06));
            z-index: 99999;
            background-size: 100% 2px, 3px 100%;
            pointer-events: none;
        }
        /* Custom Arcade Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #0f051d;
        }
        ::-webkit-scrollbar-thumb {
            background: #ff007f;
            border: 2px solid #0f051d;
        }
        .pixel-box {
            box-shadow: 4px 4px 0px #4c1d95;
            border: 2px solid #00f0ff;
        }
        .pixel-button {
            box-shadow: 3px 3px 0px #00f0ff;
            transition: all 0.1s ease;
        }
        .pixel-button:active {
            transform: translate(2px, 2px);
            box-shadow: 1px 1px 0px #00f0ff;
        }
        @keyframes blink {
            0%, 100% { opacity: 1; }
            50% { opacity: 0; }
        }
        .animate-blink {
            animation: blink 1s infinite;
        }
    </style>
</head>
<body class="h-full bg-arcade-dark text-arcade-neonCyan font-vt text-xl selection:bg-arcade-neonPink selection:text-white crt overflow-x-hidden">

    <?php
    $username = $_SESSION['username'] ?? "PLAYER ONE";
    $highScore = 999950;
    $coins = 24;
    ?>

    <div class="flex h-screen bg-arcade-dark">
        
        <aside id="sidebar" class="w-64 bg-arcade-panel border-r-4 border-arcade-border flex flex-col justify-between hidden md:flex z-20">
            <div>
                <!-- Brand / Logo -->
                <div class="p-6 border-b-4 border-arcade-border flex items-center space-x-3 bg-black/40">
                    <div class="w-8 h-8 bg-arcade-neonPink pixel-box flex items-center justify-center text-arcade-dark font-pixel text-sm animate-blink">P</div>
                    <div>
                        <h1 class="font-pixel text-xs text-arcade-neonPink tracking-wider">RETRO ARCADE</h1>
                        <span class="text-xs text-arcade-neonCyan">SYS.v2.0.46</span>
                    </div>
                </div>

                <!-- Navigation Links dengan Deteksi Otomatis Berdasarkan Nama File -->
                <nav class="p-4 space-y-2 font-pixel text-xs">
                    <a href="dashboard_utama.php" class="flex items-center space-x-3 p-3 transition-all <?php echo ($current_page == 'dashboard_utama.php') ? 'bg-arcade-neonPink text-arcade-dark font-bold pixel-box' : 'hover:bg-arcade-border text-arcade-neonCyan'; ?>">
                        <span>&gt;</span>
                        <span>DASHBOARD</span>
                    </a>
                    <a href="dashboard_project.php" class="flex items-center space-x-3 p-3 transition-all <?php echo ($current_page == 'dashboard_project.php') ? 'bg-arcade-neonPink text-arcade-dark font-bold pixel-box' : 'hover:bg-arcade-border text-arcade-neonCyan'; ?>">
                        <span>&gt;</span>
                        <span>PROJECT</span>
                    </a>
                    <a href="dashboard_skills.php" class="flex items-center space-x-3 p-3 transition-all <?php echo ($current_page == 'dashboard_skills.php') ? 'bg-arcade-neonPink text-arcade-dark font-bold pixel-box' : 'hover:bg-arcade-border text-arcade-neonCyan'; ?>">
                        <span>&gt;</span>
                        <span>SKILLS</span>
                    </a>
                   
                </nav>
            </div>

            <!-- Sidebar Footer Status -->
            <div class="p-4 border-t-4 border-arcade-border bg-black/40 text-xs font-pixel text-center">
                <span class="text-arcade-neonGreen animate-blink">● SYSTEM ONLINE</span>
                <p class="text-gray-400 mt-1 text-[10px]">CREDITS: <?php echo $coins; ?> LEFT</p>
            </div>
        </aside>

        <div class="flex-1 flex flex-col h-full overflow-hidden">
            
            <!-- Header Section -->
            <header class="h-20 bg-arcade-panel border-b-4 border-arcade-border px-6 flex items-center justify-between z-10 shadow-lg">
                <div class="flex items-center space-x-4">
                    <button onclick="toggleSidebar()" class="md:hidden text-arcade-neonPink font-pixel text-lg p-2 border-2 border-arcade-neonPink pixel-button">≡</button>
                    <div>
                        <h2 class="font-pixel text-sm text-arcade-neonYellow">MISSION: <?php echo strtoupper(str_replace(['dashboard_', '.php'], '', $current_page)); ?></h2>
                        <p class="text-xs text-arcade-neonCyan">PRESS START TO CONTINUE...</p>
                    </div>
                </div>

                <!-- User Profile & Quick Logout -->
                <div class="flex items-center space-x-4">
                    <div class="hidden sm:flex flex-col text-right">
                        <span class="font-pixel text-xs text-arcade-neonPink"><?php echo strtoupper($username); ?></span>
                        <span class="text-sm text-arcade-neonGreen">SCORE: <?php echo number_format($highScore); ?></span>
                    </div>
                    <div class="w-10 h-10 bg-arcade-neonPink pixel-box flex items-center justify-center font-pixel text-arcade-dark text-xs">
                        P1
                    </div>
                    <a href="logout.php" class="bg-arcade-neonPink text-arcade-dark font-pixel text-xs px-4 py-2 pixel-button hover:bg-arcade-neonYellow transition-colors">
                        LOGOUT
                    </a>
                </div>
            </header>

            <!-- Main Content Area -->
            <main class="flex-1 overflow-y-auto p-6 space-y-6 bg-arcade-dark">