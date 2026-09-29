          </main>

            <!-- Footer Section -->
            <footer class="bg-arcade-panel border-t-4 border-arcade-border py-4 px-6 text-center text-sm flex flex-col sm:flex-row items-center justify-between text-arcade-neonCyan z-10">
                <div class="font-pixel text-[10px] text-arcade-neonPink">
                    © 198X-2026 RETRO ARCADE SYSTEM INC. ALL RIGHTS RESERVED.
                </div>
                <div class="mt-2 sm:mt-0 space-x-4 text-xs">
                    <a href="#" class="hover:text-arcade-neonYellow">TERMS.CFG</a>
                    <span>|</span>
                    <a href="#" class="hover:text-arcade-neonYellow">PRIVACY.DAT</a>
                    <span>|</span>
                    <a href="#" class="hover:text-arcade-neonYellow">SUPPORT.EXE</a>
                </div>
            </footer>

        </div>
    </div>

    <!-- Logout Modal (Hidden by Default) -->
    <div id="logoutModal" class="fixed inset-0 bg-black/80 z-[99999] hidden items-center justify-center p-4">
        <div class="pixel-box bg-arcade-panel p-6 border-4 border-arcade-neonPink max-w-md w-full text-center space-y-6">
            <h3 class="font-pixel text-sm text-arcade-neonYellow">&gt; WARNING!</h3>
            <p class="text-2xl text-arcade-neonCyan">ARE YOU SURE YOU WANT TO INSERT QUARTER AND QUIT THE GAME?</p>
            <div class="flex justify-center space-x-4">
                <button onclick="closeLogoutModal()" class="bg-arcade-border text-arcade-neonCyan font-pixel text-xs px-6 py-3 pixel-button hover:bg-arcade-dark">CANCEL</button>
                <button onclick="alert('You have logged out safely!'); window.location.reload();" class="bg-arcade-neonPink text-arcade-dark font-pixel text-xs px-6 py-3 pixel-button hover:bg-arcade-neonYellow font-bold">CONFIRM</button>
            </div>
        </div>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('hidden');
            sidebar.classList.toggle('absolute');
            sidebar.classList.toggle('h-full');
        }

        function showLogoutModal() {
            document.getElementById('logoutModal').classList.remove('hidden');
            document.getElementById('logoutModal').classList.add('flex');
        }

        function closeLogoutModal() {
            document.getElementById('logoutModal').classList.add('hidden');
            document.getElementById('logoutModal').classList.remove('flex');
        }
    </script>
</body>
</html>

