<?php 
include 'layouts/header.php';

// Data dummy untuk tabel skills / inventory
$skills_list = [
    ['id' => 'SKL-001', 'name' => 'PHP / Native & OOP', 'category' => 'Backend', 'level' => 'ADVANCED', 'power' => '95%'],
    ['id' => 'SKL-002', 'name' => 'Tailwind CSS & UI Design', 'category' => 'Frontend', 'level' => 'EXPERT', 'power' => '90%'],
    ['id' => 'SKL-003', 'name' => 'MySQL Database Management', 'category' => 'Database', 'level' => 'ADVANCED', 'power' => '85%'],
    ['id' => 'SKL-004', 'name' => 'JavaScript & DOM Manipulation', 'category' => 'Frontend', 'level' => 'INTERMEDIATE', 'power' => '75%'],
    ['id' => 'SKL-005', 'name' => 'Git & GitHub Version Control', 'category' => 'Tools', 'level' => 'ADVANCED', 'power' => '88%'],
];
?>

<!-- Welcome Banner / Halaman Skills -->
<div class="pixel-box bg-arcade-panel p-6 border-2 border-arcade-neonPink relative overflow-hidden mb-6">
    <div class="absolute -right-10 -bottom-10 opacity-10 font-pixel text-9xl text-arcade-neonCyan pointer-events-none">SKILLS</div>
    <h3 class="font-pixel text-sm text-arcade-neonYellow mb-2">&gt; MANAJEMEN INVENTORY SKILL</h3>
    <p class="text-xl text-arcade-neonCyan max-w-2xl">Pantau daftar kemampuan dan level penguasaan karakter Anda di sini.</p>
</div>

<!-- Tabel Daftar Skill -->
<div class="pixel-box bg-arcade-panel p-6 border-2 border-arcade-border">
    <div class="flex justify-between items-center mb-6">
        <h4 class="font-pixel text-xs text-arcade-neonYellow">&gt; SKILL_INVENTORY.TBL</h4>
        <button class="bg-arcade-neonPink text-arcade-dark font-pixel text-xs px-4 py-2 pixel-button hover:bg-arcade-neonYellow font-bold">
            + ADD SKILL
        </button>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="border-b-2 border-arcade-border text-arcade-neonPink font-pixel text-xs">
                    <th class="p-3">ID</th>
                    <th class="p-3">NAMA SKILL</th>
                    <th class="p-3">KATEGORI</th>
                    <th class="p-3">LEVEL</th>
                    <th class="p-3">POWER</th>
                    <th class="p-3 text-center">AKSI</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-arcade-border text-lg">
                <?php foreach($skills_list as $skill): ?>
                <tr class="hover:bg-arcade-dark/50 transition-colors">
                    <td class="p-3 font-pixel text-xs text-arcade-neonCyan"><?php echo $skill['id']; ?></td>
                    <td class="p-3 font-bold text-white"><?php echo $skill['name']; ?></td>
                    <td class="p-3 text-gray-300"><?php echo $skill['category']; ?></td>
                    <td class="p-3">
                        <span class="font-pixel text-[10px] px-2 py-1 border border-arcade-neonCyan text-arcade-neonCyan bg-arcade-neonCyan/10">
                            <?php echo $skill['level']; ?>
                        </span>
                    </td>
                    <td class="p-3 text-arcade-neonGreen font-pixel text-xs"><?php echo $skill['power']; ?></td>
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