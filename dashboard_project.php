<?php 
include 'layouts/header.php';

// Data statistik untuk project dan skills
$totalProjects = 12;
$completedProjects = 10;
$ongoingProjects = 2;

$totalSkills = 18;
$masteredSkills = 15;

// Data dummy untuk tabel project
$projects_list = [
    ['id' => 'PRJ-001', 'name' => 'Retro Arcade Web Portfolio', 'category' => 'Web App', 'status' => 'COMPLETED', 'progress' => '100%'],
    ['id' => 'PRJ-002', 'name' => 'Pixel Art RPG Game (PHP/JS)', 'category' => 'Game', 'status' => 'ONGOING', 'progress' => '65%'],
    ['id' => 'PRJ-003', 'name' => 'Cyberpunk Inventory System', 'category' => 'Backend', 'status' => 'COMPLETED', 'progress' => '100%'],
    ['id' => 'PRJ-004', 'name' => '8-Bit Landing Page Template', 'category' => 'Frontend', 'status' => 'ONGOING', 'progress' => '40%'],
];
?>

<!-- Welcome Banner / Halaman Project -->
<div class="pixel-box bg-arcade-panel p-6 border-2 border-arcade-neonPink relative overflow-hidden mb-6">
    <div class="absolute -right-10 -bottom-10 opacity-10 font-pixel text-9xl text-arcade-neonCyan pointer-events-none">PROJECT</div>
    <h3 class="font-pixel text-sm text-arcade-neonYellow mb-2">&gt; MANAJEMEN PROJECT &amp; SKILL</h3>
    <p class="text-xl text-arcade-neonCyan max-w-2xl">Pantau statistik quest project dan penguasaan skill Anda di sini.</p>
</div>

<!-- Grid Ringkasan Jumlah Project & Skill -->

<!-- Tabel Daftar Project -->
<div class="pixel-box bg-arcade-panel p-6 border-2 border-arcade-border">
    <div class="flex justify-between items-center mb-6">
        <h4 class="font-pixel text-xs text-arcade-neonYellow">&gt; ACTIVE_PROJECT_LOGS.TBL</h4>
        <button class="bg-arcade-neonPink text-arcade-dark font-pixel text-xs px-4 py-2 pixel-button hover:bg-arcade-neonYellow font-bold">
            + NEW QUEST
        </button>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="border-b-2 border-arcade-border text-arcade-neonPink font-pixel text-xs">
                    <th class="p-3">ID</th>
                    <th class="p-3">NAMA PROJECT</th>
                    <th class="p-3">KATEGORI</th>
                    <th class="p-3">STATUS</th>
                    <th class="p-3">PROGRESS</th>
                    <th class="p-3 text-center">AKSI</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-arcade-border text-lg">
                <?php foreach($projects_list as $proj): ?>
                <tr class="hover:bg-arcade-dark/50 transition-colors">
                    <td class="p-3 font-pixel text-xs text-arcade-neonCyan"><?php echo $proj['id']; ?></td>
                    <td class="p-3 font-bold text-white"><?php echo $proj['name']; ?></td>
                    <td class="p-3 text-gray-300"><?php echo $proj['category']; ?></td>
                    <td class="p-3">
                        <span class="font-pixel text-[10px] px-2 py-1 border <?php echo ($proj['status'] == 'COMPLETED') ? 'border-arcade-neonGreen text-arcade-neonGreen bg-arcade-neonGreen/10' : 'border-arcade-neonYellow text-arcade-neonYellow bg-arcade-neonYellow/10'; ?>">
                            <?php echo $proj['status']; ?>
                        </span>
                    </td>
                    <td class="p-3 text-arcade-neonCyan font-pixel text-xs"><?php echo $proj['progress']; ?></td>
                    <td class="p-3 text-center">
                        <a href="#" class="inline-block bg-arcade-neonCyan text-arcade-dark font-pixel text-[10px] px-2.5 py-1 pixel-button hover:bg-arcade-neonYellow">EDIT</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?php
include 'layouts/footer.php'; 
?>