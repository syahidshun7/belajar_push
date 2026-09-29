<?php 
include 'layouts/header.php';

// Data statistik untuk project dan skills
$totalProjects = 12;
$completedProjects = 10;
$ongoingProjects = 2;

$totalSkills = 18;
$masteredSkills = 15;
?>

<!-- Welcome Banner / Halaman Project -->
<div class="pixel-box bg-arcade-panel p-6 border-2 border-arcade-neonPink relative overflow-hidden mb-6">
    <div class="absolute -right-10 -bottom-10 opacity-10 font-pixel text-9xl text-arcade-neonCyan pointer-events-none">PROJECT</div>
    <h3 class="font-pixel text-sm text-arcade-neonYellow mb-2">&gt; MANAJEMEN PROJECT &amp; SKILL</h3>
    <p class="text-xl text-arcade-neonCyan max-w-2xl">Pantau statistik quest project dan penguasaan skill Anda di sini.</p>
</div>

<!-- Grid Ringkasan Jumlah Project & Skill -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    
    <!-- Card Jumlah Project -->
    <div class="pixel-box bg-arcade-panel p-6 border-2 border-arcade-border flex flex-col justify-between">
        <div>
            <div class="flex justify-between items-center mb-4">
                <h4 class="font-pixel text-xs text-arcade-neonPink">&gt; TOTAL_PROJECTS.DAT</h4>
                <span class="font-pixel text-[10px] bg-arcade-border px-2 py-1 text-arcade-neonYellow">QUESTS</span>
            </div>
            <div class="my-4">
                <div class="text-5xl font-bold font-pixel text-arcade-neonCyan mb-2"><?php echo $totalProjects; ?></div>
                <p class="text-lg text-gray-300">Selesai: <span class="text-arcade-neonGreen font-bold"><?php echo $completedProjects; ?></span> | Berjalan: <span class="text-arcade-neonYellow font-bold"><?php echo $ongoingProjects; ?></span></p>
            </div>
        </div>
        <div class="w-full bg-arcade-dark h-3 border border-arcade-border overflow-hidden mt-4">
            <div class="bg-arcade-neonPink h-full w-5/6 animate-pulse"></div>
        </div>
    </div>

    <!-- Card Jumlah Skill -->
    <div class="pixel-box bg-arcade-panel p-6 border-2 border-arcade-border flex flex-col justify-between">
        <div>
            <div class="flex justify-between items-center mb-4">
                <h4 class="font-pixel text-xs text-arcade-neonPink">&gt; TOTAL_SKILLS.DAT</h4>
                <span class="font-pixel text-[10px] bg-arcade-border px-2 py-1 text-arcade-neonYellow">INVENTORY</span>
            </div>
            <div class="my-4">
                <div class="text-5xl font-bold font-pixel text-arcade-neonYellow mb-2"><?php echo $totalSkills; ?></div>
                <p class="text-lg text-gray-300">Dikuasai: <span class="text-arcade-neonGreen font-bold"><?php echo $masteredSkills; ?></span> | Proses: <span class="text-arcade-neonCyan font-bold"><?php echo $totalSkills - $masteredSkills; ?></span></p>
            </div>
        </div>
        <div class="w-full bg-arcade-dark h-3 border border-arcade-border overflow-hidden mt-4">
            <div class="bg-arcade-neonGreen h-full w-4/5 animate-pulse"></div>
        </div>
    </div>

</div>

<?php
include 'layouts/footer.php'; 
?>