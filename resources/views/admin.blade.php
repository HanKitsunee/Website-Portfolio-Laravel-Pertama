<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Han.Kitsu</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              bgDark: '#0f0f0f',     // Background utama
              cardDark: '#1e1e1e',   // Warna Sidebar & Card
              textMain: '#F0FFFF',   // Warna Teks Utama
              textGray: '#959595',   // Warna Teks Secondary
            },
            fontFamily: {
              poppins: ['Poppins', 'sans-serif'],
            }
          }
        }
      }
    </script>
    <style>
        /* Custom Scrollbar */
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #0f0f0f; }
        ::-webkit-scrollbar-thumb { background: #333; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #555; }
        
        .active-menu {
            background-color: #F0FFFF;
            color: #0f0f0f;
            font-weight: 700;
        }

        /* Transisi Sidebar Mobile */
        .sidebar-transition {
            transition: transform 0.3s ease-in-out;
        }
    </style>
</head>
<body class="font-poppins bg-bgDark text-textMain h-screen overflow-hidden flex relative">

    <div id="sidebar-overlay" onclick="toggleSidebar()" class="fixed inset-0 bg-black/50 z-40 hidden md:hidden glass"></div>

    <aside id="sidebar" class="sidebar-transition fixed inset-y-0 left-0 z-50 w-64 bg-cardDark h-full flex flex-col justify-between border-r border-gray-800 shadow-2xl transform -translate-x-full md:relative md:translate-x-0">
        <div>
            <div class="p-8 flex items-center justify-between md:justify-start gap-3">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 bg-textMain rounded-full flex items-center justify-center text-bgDark font-bold">H</div>
                    <h1 class="text-2xl font-bold tracking-wider">Han.Kitsu</h1>
                </div>
                <button onclick="toggleSidebar()" class="md:hidden text-gray-400 hover:text-white">
                    <i class="fa-solid fa-xmark text-xl"></i>
                </button>
            </div>

            <nav class="px-4 space-y-2 mt-4">
                <p class="px-4 text-xs text-textGray uppercase font-bold tracking-widest mb-2">Main Menu</p>
                
                <button onclick="switchTab('dashboard')" id="btn-dashboard" class="w-full flex items-center gap-4 px-4 py-3 rounded-xl text-gray-400 hover:bg-gray-800 transition-all active-menu">
                    <i class="fa-solid fa-grid-2 text-lg"></i>
                    <span class="font-medium">All Projects</span>
                </button>

                <button onclick="switchTab('add')" id="btn-add" class="w-full flex items-center gap-4 px-4 py-3 rounded-xl text-gray-400 hover:bg-gray-800 transition-all">
                    <i class="fa-solid fa-square-plus text-lg"></i>
                    <span class="font-medium">Add New</span>
                </button>
            </nav>
        </div>

        <div class="p-4 border-t border-gray-800">
             <a href="{{ route('home') }}" class="flex items-center gap-4 px-4 py-3 rounded-xl text-textGray hover:text-white hover:bg-gray-800 transition-all">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                <span class="font-medium">Back to Website</span>
            </a>
        </div>
    </aside>

    <main class="flex-1 h-full overflow-y-auto relative p-6 md:p-10 w-full">
        
        <header class="flex justify-between items-center mb-10">
            <div class="flex items-center gap-4">
                <button onclick="toggleSidebar()" class="md:hidden text-textMain text-2xl">
                    <i class="fa-solid fa-bars"></i>
                </button>

                <div>
                    <h2 class="text-2xl md:text-3xl font-bold mb-1">Welcome, Admin!</h2>
                    <p class="text-textGray text-xs md:text-sm">Manage your portfolio content easily.</p>
                </div>
            </div>
            
            <div class="flex items-center gap-3 bg-cardDark px-4 py-2 rounded-full border border-gray-700">
                <div class="w-8 h-8 rounded-full bg-gray-600 overflow-hidden">
                    <img src="https://ui-avatars.com/api/?name=F&background=F0FFFF&color=0f0f0f" alt="Admin">
                </div>
                <span class="text-sm font-semibold pr-2 hidden md:block">Farhan Fauzi</span>
            </div>
        </header>

        @if(session('success'))
            <div id="alert-box" class="mb-6 bg-green-500/10 border border-green-500 text-green-400 px-6 py-4 rounded-xl flex justify-between items-center animate-fade-in">
                <div class="flex items-center gap-3">
                    <i class="fa-solid fa-circle-check"></i>
                    {{ session('success') }}
                </div>
                <button onclick="document.getElementById('alert-box').style.display='none'" class="hover:text-white"><i class="fa-solid fa-xmark"></i></button>
            </div>
        @endif


        <div id="view-dashboard" class="animate-fade-in">
            <div class="flex justify-between items-end mb-6">
                <h3 class="text-xl font-bold">Recent Projects</h3>
                <span class="text-textGray text-sm">{{ count($portfolios) }} Projects Found</span>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                
                @forelse($portfolios as $item)
                <div class="group bg-cardDark rounded-2xl p-3 hover:bg-gray-800 border border-transparent hover:border-gray-600 transition-all duration-300 relative">
                    
                    <div class="h-40 w-full rounded-xl overflow-hidden mb-4 relative">
                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        
                        <div class="absolute top-2 right-2 opacity-0 group-hover:opacity-100 transition-opacity">
                            <form action="{{ route('admin.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Delete this project permanently?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white w-8 h-8 rounded-full flex items-center justify-center shadow-lg hover:bg-red-600 hover:scale-110 transition-all" title="Hapus">
                                    <i class="fa-solid fa-trash text-xs"></i>
                                </button>
                            </form>
                        </div>
                    </div>

                    <div class="px-1">
                        <h4 class="font-bold text-lg text-white mb-1 truncate">{{ $item->title }}</h4>
                        <div class="flex justify-between items-center">
                            <span class="text-xs text-textGray bg-[#0f0f0f] px-2 py-1 rounded border border-gray-700">{{ $item->category }}</span>
                            <span class="text-[10px] text-gray-500">{{ $item->created_at->diffForHumans() }}</span>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-span-full text-center py-20 border-2 border-dashed border-gray-700 rounded-2xl">
                    <i class="fa-regular fa-folder-open text-4xl text-gray-600 mb-4"></i>
                    <p class="text-gray-500">Belum ada portfolio. Klik menu "Add New" untuk menambah.</p>
                </div>
                @endforelse

            </div>
        </div>


        <div id="view-add" class="hidden animate-fade-in">
            <div class="max-w-4xl mx-auto">
                <div class="mb-6">
                    <h3 class="text-xl font-bold">Add New Project</h3>
                    <p class="text-textGray text-sm">Fill in the details below to upload a new work.</p>
                </div>

                <div class="bg-cardDark p-6 md:p-8 rounded-2xl border border-gray-800 shadow-xl">
                    <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block mb-2 text-sm font-semibold text-gray-400">Project Title</label>
                                <input type="text" name="title" required placeholder="Ex: E-Commerce App" 
                                    class="w-full p-3 bg-[#0f0f0f] border border-gray-700 rounded-xl text-white focus:outline-none focus:border-textMain focus:ring-1 focus:ring-textMain transition-all">
                            </div>

                            <div>
                                <label class="block mb-2 text-sm font-semibold text-gray-400">Category</label>
                                <input type="text" name="category" required placeholder="Ex: Web Design" 
                                    class="w-full p-3 bg-[#0f0f0f] border border-gray-700 rounded-xl text-white focus:outline-none focus:border-textMain focus:ring-1 focus:ring-textMain transition-all">
                            </div>
                        </div>

                        <div>
                            <label class="block mb-2 text-sm font-semibold text-gray-400">Thumbnail Image</label>
                            <label class="flex flex-col items-center justify-center w-full h-32 border-2 border-gray-700 border-dashed rounded-xl cursor-pointer bg-[#0f0f0f] hover:bg-gray-800 transition-colors">
                                <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                    <i class="fa-solid fa-cloud-arrow-up text-2xl text-textGray mb-2"></i>
                                    <p class="text-sm text-gray-500">Click to upload image</p>
                                </div>
                                <input type="file" name="image" class="hidden" onchange="previewImage(this)" />
                            </label>
                            <div id="img-preview-box" class="mt-4 hidden">
                                <span class="text-xs text-green-400">Selected: </span>
                                <span id="file-name" class="text-xs text-white"></span>
                            </div>
                        </div>

                        <div>
                            <label class="block mb-2 text-sm font-semibold text-gray-400">Description</label>
                            <textarea name="description" rows="5" required placeholder="Tell a story about this project..." 
                                class="w-full p-3 bg-[#0f0f0f] border border-gray-700 rounded-xl text-white focus:outline-none focus:border-textMain focus:ring-1 focus:ring-textMain transition-all"></textarea>
                        </div>

                        <div class="pt-4 flex items-center justify-end gap-4">
                            <button type="button" onclick="switchTab('dashboard')" class="px-6 py-3 rounded-xl text-gray-400 hover:text-white font-medium transition-colors">Cancel</button>
                            <button type="submit" class="px-8 py-3 bg-textMain text-bgDark font-bold rounded-xl hover:bg-white hover:shadow-[0_0_15px_rgba(240,255,255,0.4)] transition-all transform hover:-translate-y-1">
                                Publish Project
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </main>

    <script>
        // --- LOGIC SIDEBAR MOBILE ---
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebar-overlay');
            
            // Cek apakah sidebar sedang hidden (ada class -translate-x-full)
            if (sidebar.classList.contains('-translate-x-full')) {
                // BUKA SIDEBAR
                sidebar.classList.remove('-translate-x-full');
                overlay.classList.remove('hidden');
            } else {
                // TUTUP SIDEBAR
                sidebar.classList.add('-translate-x-full');
                overlay.classList.add('hidden');
            }
        }

        // --- LOGIC TAB SWITCHING ---
        function switchTab(tabName) {
            // Jika di mobile, otomatis tutup sidebar setelah klik menu
            if (window.innerWidth < 768) {
                toggleSidebar();
            }

            // Sembunyikan semua view
            document.getElementById('view-dashboard').classList.add('hidden');
            document.getElementById('view-add').classList.add('hidden');
            
            // Reset tombol menu
            document.getElementById('btn-dashboard').classList.remove('active-menu', 'text-bgDark');
            document.getElementById('btn-dashboard').classList.add('text-gray-400');
            
            document.getElementById('btn-add').classList.remove('active-menu', 'text-bgDark');
            document.getElementById('btn-add').classList.add('text-gray-400');

            // Tampilkan view yang dipilih
            if (tabName === 'dashboard') {
                document.getElementById('view-dashboard').classList.remove('hidden');
                document.getElementById('btn-dashboard').classList.add('active-menu');
                document.getElementById('btn-dashboard').classList.remove('text-gray-400');
            } else if (tabName === 'add') {
                document.getElementById('view-add').classList.remove('hidden');
                document.getElementById('btn-add').classList.add('active-menu');
                document.getElementById('btn-add').classList.remove('text-gray-400');
            }
        }

        // --- LOGIC IMAGE PREVIEW ---
        function previewImage(input) {
            const previewBox = document.getElementById('img-preview-box');
            const fileName = document.getElementById('file-name');
            if (input.files && input.files[0]) {
                fileName.innerText = input.files[0].name;
                previewBox.classList.remove('hidden');
            }
        }
    </script>

</body>
</html>