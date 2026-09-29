<?php
session_start();
$error_message = isset($_SESSION['error_message']) ? $_SESSION['error_message'] : "";
unset($_SESSION['error_message']);
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel Portfolio - Login Portal</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=VT323&display=swap" rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        pixel: ['"Press Start 2P"', 'monospace'],
                        vt: ['"VT323"', 'monospace'],
                    },
                    colors: {
                        retro: {
                            bg: '#0c0c14',
                            card: '#161625',
                            border: '#3b3b5c',
                            neonGreen: '#00ff66',
                            neonPink: '#ff007f',
                            neonCyan: '#00ffff',
                            neonYellow: '#ffe600',
                            purple: '#9d00ff'
                        }
                    }
                }
            }
        }
    </script>
    <style>
        body {
            background-color: #0c0c14;
            color: #ffffff;
            image-rendering: pixelated;
        }

        .pixel-box {
            box-shadow:
                -4px 0 0 0 #3b3b5c,
                4px 0 0 0 #3b3b5c,
                0 -4px 0 0 #3b3b5c,
                0 4px 0 0 #3b3b5c,
                -8px 0 0 0 #0c0c14,
                8px 0 0 0 #0c0c14,
                0 -8px 0 0 #0c0c14,
                0 8px 0 0 #0c0c14;
            background-color: #161625;
            margin: 8px;
        }

        .pixel-btn {
            position: relative;
            background-color: #ff007f;
            color: #ffffff;
            font-family: 'Press Start 2P', monospace;
            box-shadow:
                -2px 0 0 0 #ffffff,
                2px 0 0 0 #ffffff,
                0 -2px 0 0 #ffffff,
                0 2px 0 0 #ffffff,
                -4px 0 0 0 #000000,
                4px 0 0 0 #000000,
                0 -4px 0 0 #000000,
                0 4px 0 0 #000000;
            transition: transform 0.1s ease;
        }

        .pixel-btn:hover {
            background-color: #ffe600;
            color: #0c0c14;
        }

        .pixel-btn:active {
            transform: translate(2px, 2px);
        }

        .crt::after {
            content: " ";
            display: block;
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            background: linear-gradient(rgba(18, 16, 16, 0) 50%, rgba(0, 0, 0, 0.25) 50%), linear-gradient(90deg, rgba(255, 0, 0, 0.03), rgba(0, 255, 0, 0.01), rgba(0, 0, 255, 0.03));
            z-index: 999;
            background-size: 100% 4px, 6px 100%;
            pointer-events: none;
        }
    </style>
</head>

<body class="crt font-vt min-h-screen flex flex-col justify-between selection:bg-retro-neonPink selection:text-white">

    <header class="bg-retro-bg/95 border-b-4 border-retro-border py-4 px-6">
        <div class="max-w-6xl mx-auto flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div
                    class="w-8 h-8 bg-retro-neonPink pixel-badge flex items-center justify-center text-black font-bold">
                    L</div>
                <h1 class="font-pixel text-xs text-retro-neonPink tracking-widest">&lt;AUTH_PORTAL&gt;</h1>
            </div>
            <a href="index.html"
                class="pixel-btn px-4 py-2 text-xs bg-retro-neonCyan text-black hover:bg-retro-neonYellow">
                &lt; BACK TO PORTFOLIO
            </a>
        </div>
    </header>

    <main class="max-w-md w-full mx-auto px-4 py-12">
        <div class="pixel-box p-6 md:p-8 bg-retro-card border-4 border-retro-neonYellow space-y-6">
            <div class="text-center space-y-2">
                <div class="inline-block bg-retro-neonYellow text-black font-pixel text-xs px-2 py-1">RESTRICTED AREA
                </div>
                <h2 class="font-pixel text-xl text-retro-neonYellow">ADMIN LOGIN</h2>
                <p class="text-gray-300 text-lg font-vt">Masukkan kredensial pemain untuk mengakses level developer.</p>
            </div>

            <?php if ($error_message !== ""): ?>
                <div style="color: red; font-weight: bold;">
                    <?= htmlspecialchars($error_message); ?>
                </div><br>
            <?php endif; ?>

            <form action="login.php" method="post" class="space-y-4">
                <div class="space-y-1">
                    <label class="block font-pixel text-xs text-retro-neonCyan">&gt; USERNAME_ID:</label>
                    <input type="text" name="username" id="username" required placeholder="admin..."
                        class="w-full bg-retro-bg border-2 border-retro-border p-3 text-retro-neonGreen font-vt text-xl outline-none focus:border-retro-neonYellow">
                </div>
                <div class="space-y-1">
                    <label class="block font-pixel text-xs text-retro-neonCyan">&gt; SECRET_PASSWORD:</label>
                    <input type="password" name="password" id="passwordInput" required placeholder="••••••••"
                        class="w-full bg-retro-bg border-2 border-retro-border p-3 text-retro-neonGreen font-vt text-xl outline-none focus:border-retro-neonYellow">
                </div>

                <div class="bg-retro-bg p-3 border-2 border-retro-border text-sm text-gray-400">
                    <p class="text-retro-neonCyan font-pixel text-xs mb-1">HINT KREDENSIAL:</p>
                    <p>Username: <code class="text-retro-neonGreen">admin</code></p>
                    <p>Password: <code class="text-retro-neonGreen">pixel2026</code></p>
                </div>

                <div id="loginMsg" class="font-vt text-lg h-6 text-center"></div>

                <button type="submit" class="pixel-btn w-full py-3 text-xs bg-retro-neonYellow text-black">
                    [ START SESSION ]
                </button>
            </form>
        </div>
    </main>

    <footer
        class="max-w-5xl mx-auto px-4 py-6 border-t-4 border-retro-border text-center font-pixel text-xs text-gray-400">
        <p>&copy; 2026 RAHMAT HIDAYAT. ALL RIGHTS RESERVED.</p>
    </footer>

    <script>
        function playBeep(freq = 440, duration = 80) {
            try {
                const audioCtx = new (window.AudioContext || window.webkitAudioContext)();
                const oscillator = audioCtx.createOscillator();
                const gainNode = audioCtx.createGain();
                oscillator.type = 'square';
                oscillator.frequency.value = freq;
                gainNode.gain.setValueAtTime(0.05, audioCtx.currentTime);
                oscillator.connect(gainNode);
                gainNode.connect(audioCtx.destination);
                oscillator.start();
                setTimeout(() => {
                    oscillator.stop();
                    audioCtx.close();
                }, duration);
            } catch (e) {
                console.log('Audio blocked');
            }
        }

        function handleLoginForm(event) {
            event.preventDefault();
            playBeep(600, 60);
            const user = document.getElementById('usernameInput').value.trim();
            const pass = document.getElementById('passwordInput').value.trim();
            const msgEl = document.getElementById('loginMsg');

            if (user === 'admin' && pass === 'pixel2026') {
                msgEl.className = 'font-vt text-lg h-6 text-center text-retro-neonGreen';
                msgEl.innerText = 'ACCESS GRANTED! Selamat datang Master Player.';
                playBeep(1000, 200);
                setTimeout(() => {
                    window.location.href = 'index.html';
                }, 1500);
            } else {
                msgEl.className = 'font-vt text-lg h-6 text-center text-retro-neonPink';
                msgEl.innerText = 'ACCESS DENIED! Coba user: admin | pass: pixel2026';
                playBeep(250, 250);
            }
        }
    </script>
</body>

</html>