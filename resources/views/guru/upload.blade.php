<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    @include('layout.header') 
    <style>
        body {
            background: linear-gradient(135deg, #1e3a5f 0%, #2d5a7b 50%, #1e3a5f 100%);
            background-attachment: fixed;
            min-height: 100vh;
            background-image: 
                url("data:image/svg+xml,%3Csvg width='150' height='150' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' stroke='%23ffffff' stroke-width='1' opacity='0.06'%3E%3Cg transform='rotate(23 20 20)'%3E%3Cpath d='M15 10 L25 20 L15 30 L5 20 Z'/%3E%3C/g%3E%3Cg transform='rotate(-15 60 60)'%3E%3Ccircle cx='60' cy='60' r='12'/%3E%3C/g%3E%3Cg transform='rotate(45 30 90)'%3E%3Crect x='25' y='85' width='10' height='10'/%3E%3C/g%3E%3Cg transform='rotate(-30 120 30)'%3E%3Cpath d='M115 25 L125 35 L115 45' stroke-width='2'/%3E%3C/g%3E%3Cg transform='rotate(60 90 90)'%3E%3Cpolygon points='90,80 85,95 95,95'/%3E%3C/g%3E%3Cg transform='rotate(-45 40 50)'%3E%3Ctext x='35' y='55' font-size='16' fill='%23fff' opacity='0.08'%3EA+%3C/text%3E%3C/g%3E%3Cg transform='rotate(75 110 80)'%3E%3Cpath d='M105 75 Q115 80 105 85'/%3E%3C/g%3E%3Cg transform='rotate(-60 70 120)'%3E%3Ccircle cx='70' cy='120' r='5'/%3E%3C/g%3E%3Cg transform='rotate(15 130 110)'%3E%3Cpath d='M125 105 L135 115 M130 105 L130 115'/%3E%3C/g%3E%3Cg transform='rotate(-90 20 130)'%3E%3Crect x='17' y='127' width='6' height='6'/%3E%3C/g%3E%3Cg transform='rotate(35 100 40)'%3E%3Cpath d='M95 40 L100 35 L105 40 L100 45 Z'/%3E%3C/g%3E%3Cg transform='rotate(-25 50 20)'%3E%3Ctext x='45' y='25' font-size='14' fill='%23fff' opacity='0.06'%3E?%3C/text%3E%3C/g%3E%3C/g%3E%3C/svg%3E"),
                linear-gradient(135deg, #1e3a5f 0%, #2d5a7b 50%, #1e3a5f 100%);
            background-size: 250px 250px, cover;
            margin: 0;
            padding: 0;
        }

        .upload-container {
            padding: 60px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .page-title {
            color: white;
            font-size: 2rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 40px;
        }

        .upload-section {
            background: white;
            border-radius: 12px;
            padding: 40px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.3);
            margin-bottom: 50px;
        }

        .upload-area {
            display: flex;
            gap: 30px;
        }

        .file-drop-zone {
            flex: 1;
            border: 3px dashed #d1d5db;
            border-radius: 12px;
            padding: 60px 20px;
            text-align: center;
            background: #f9fafb;
            cursor: pointer;
            transition: all 0.3s;
        }

        .file-drop-zone:hover {
            border-color: #2d5a7b;
            background: #f3f4f6;
        }

        .file-drop-zone.dragover {
            border-color: #2d5a7b;
            background: #e0f2fe;
        }

        .upload-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 20px;
            background: #2d5a7b;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .upload-icon svg {
            width: 40px;
            height: 40px;
            fill: white;
        }

        .file-drop-zone p {
            color: #374151;
            margin: 10px 0;
            font-size: 1rem;
        }

        .choose-file-link {
            color: #2d5a7b;
            text-decoration: underline;
            cursor: pointer;
            font-weight: 600;
        }

        .form-section {
            flex: 1;
        }

        .form-section label {
            display: block;
            font-weight: 600;
            color: #374151;
            margin-bottom: 8px;
        }

        .form-section input,
        .form-section textarea,
        .form-section select {
            width: 100%;
            padding: 12px;
            border: 1px solid #d1d5db;
            border-radius: 6px;
            margin-bottom: 20px;
            font-size: 1rem;
        }

        .form-section textarea {
            min-height: 100px;
            resize: vertical;
        }

        .form-section input:focus,
        .form-section textarea:focus,
        .form-section select:focus {
            outline: none;
            border-color: #2d5a7b;
            box-shadow: 0 0 0 3px rgba(45, 90, 123, 0.1);
        }

        .upload-btn {
            background-color: #2d5a7b;
            color: white;
            border: none;
            padding: 12px 32px;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
            float: right;
            transition: background-color 0.3s;
        }

        .upload-btn:hover {
            background-color: #1e3a5f;
        }

        
        .recent-section {
            background: #2d5a7b;
            padding: 50px 20px;
            border-radius: 12px;
        }

        .recent-title {
            color: white;
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .uploads-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 25px;
            margin-bottom: 30px;
        }

        .upload-card {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0,0,0,0.15);
            transition: transform 0.3s;
        }

        .upload-card:hover {
            transform: translateY(-5px);
        }

        .upload-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .upload-card-body {
            padding: 20px;
        }

        .upload-card-title {
            font-weight: bold;
            color: #1e3a5f;
            margin-bottom: 8px;
            font-size: 1.1rem;
        }

        .upload-card-text {
            color: #6b7280;
            font-size: 0.9rem;
            line-height: 1.5;
        }

        .pagination {
            display: flex;
            justify-content: center;
            gap: 10px;
            align-items: center;
        }

        .pagination button {
            background: white;
            border: none;
            color: #2d5a7b;
            padding: 8px 12px;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 600;
        }

        .pagination button:hover {
            background: #e0f2fe;
        }

        .pagination button.active {
            background: #1e3a5f;
            color: white;
        }

        .pagination button:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        #fileInput {
            display: none;
        }
    </style>
</head>
<body>
    <!-- Main Content -->
    <div class="upload-container">
        <h1 class="page-title">Upload extra materials/documents/notes here</h1>

        <!-- Upload Form Section -->
        <div class="upload-section">
            <form action="/upload" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="upload-area">
                    <!-- File Drop Zone -->
                    <div class="file-drop-zone" id="dropZone">
                        <div class="upload-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M14 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8l-6-6zm-1 2l5 5h-5V4zM6 20V4h6v6h6v10H6z"/>
                                <path d="M13 13v4h-2v-4H8l4-4 4 4h-3z"/>
                            </svg>
                        </div>
                        <p><strong>Drag and Drop File here</strong> or <span class="choose-file-link" onclick="document.getElementById('fileInput').click()">Choose file</span></p>
                        <input type="file" id="fileInput" name="file" accept=".pdf,.doc,.docx,.ppt,.pptx,.txt">
                    </div>

                    <!-- Form Fields -->
                    <div class="form-section">
                        <div>
                            <label for="title">Title</label>
                            <input type="text" id="title" name="title" required>
                        </div>

                        <div>
                            <label for="description">Description</label>
                            <textarea id="description" name="description" required></textarea>
                        </div>

                        <div>
                            <label for="grade">Grade</label>
                            <select id="grade" name="grade" required>
                                <option value="">Choose Grade</option>
                                <option value="1">Grade 1</option>
                                <option value="2">Grade 2</option>
                                <option value="3">Grade 3</option>
                                <option value="4">Grade 4</option>
                                <option value="5">Grade 5</option>
                                <option value="6">Grade 6</option>
                                <option value="7">Grade 7</option>
                                <option value="8">Grade 8</option>
                                <option value="9">Grade 9</option>
                                <option value="10">Grade 10</option>
                                <option value="11">Grade 11</option>
                                <option value="12">Grade 12</option>
                            </select>
                        </div>

                        <div>
                            <label for="subject">Subject</label>
                            <select id="subject" name="subject" required>
                                <option value="">Choose Subject</option>
                                <option value="math">Math</option>
                                <option value="science">Science</option>
                                <option value="english">English</option>
                                <option value="history">Bahasa Indonesia</option>
                                <option value="geography">Religion</option>
                                <option value="geography">PKN</option>
                            </select>
                        </div>

                        <button type="submit" class="upload-btn">Upload</button>
                    </div>
                </div>
            </form>
        </div>

        <!-- Recent Upload Section -->
        <div class="recent-section">
            <h2 class="recent-title">Recent Uploads</h2>
            
            <div class="uploads-grid">
                <!-- Upload Card 1 -->
                <div class="upload-card">
                    <img src="https://via.placeholder.com/280x180/2d5a7b/ffffff?text=Notes" alt="Upload">
                    <div class="upload-card-body">
                        <h3 class="upload-card-title">Notes by Bob</h3>
                        <p class="upload-card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem...</p>
                    </div>
                </div>

                <!-- Upload Card 2 -->
                <div class="upload-card">
                    <img src="https://via.placeholder.com/280x180/1e3a5f/ffffff?text=Operations" alt="Upload">
                    <div class="upload-card-body">
                        <h3 class="upload-card-title">Advance Operations</h3>
                        <p class="upload-card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem...</p>
                    </div>
                </div>

                <!-- Upload Card 3 -->
                <div class="upload-card">
                    <img src="https://via.placeholder.com/280x180/2d5a7b/ffffff?text=Quiz" alt="Upload">
                    <div class="upload-card-body">
                        <h3 class="upload-card-title">Quiz/Exam Example</h3>
                        <p class="upload-card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem...</p>
                    </div>
                </div>

                <!-- Upload Card 4 -->
                <div class="upload-card">
                    <img src="https://via.placeholder.com/280x180/1e3a5f/ffffff?text=Example" alt="Upload">
                    <div class="upload-card-body">
                        <h3 class="upload-card-title">Quiz/Exam Example</h3>
                        <p class="upload-card-text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem...</p>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="pagination" id="pagination">
                <button id="prevBtn" onclick="changePage('prev')">&lt;</button>
                <button class="active" onclick="changePage(1)">1</button>
                <button onclick="changePage(2)">2</button>
                <button onclick="changePage(3)">3</button>
                <button onclick="changePage(4)">4</button>
                <button onclick="changePage(5)">5</button>
                <button onclick="changePage(6)">6</button>
                <button onclick="changePage(7)">7</button>
                <button onclick="changePage(8)">8</button>
                <button id="nextBtn" onclick="changePage('next')">&gt;</button>
            </div>
        </div>
    </div>

    <script>
        let currentPage = 1;
        const totalPages = 8;

        // Drag and drop functionality
        const dropZone = document.getElementById('dropZone');
        const fileInput = document.getElementById('fileInput');

        dropZone.addEventListener('dragover', (e) => {
            e.preventDefault();
            dropZone.classList.add('dragover');
        });

        dropZone.addEventListener('dragleave', () => {
            dropZone.classList.remove('dragover');
        });

        dropZone.addEventListener('drop', (e) => {
            e.preventDefault();
            dropZone.classList.remove('dragover');
            
            const files = e.dataTransfer.files;
            if (files.length > 0) {
                fileInput.files = files;
                updateDropZoneText(files[0].name);
            }
        });

        fileInput.addEventListener('change', (e) => {
            if (e.target.files.length > 0) {
                updateDropZoneText(e.target.files[0].name);
            }
        });

        function updateDropZoneText(filename) {
            dropZone.innerHTML = `
                <div class="upload-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M9 16.2L4.8 12l-1.4 1.4L9 19 21 7l-1.4-1.4L9 16.2z" fill="white"/>
                    </svg>
                </div>
                <p><strong>${filename}</strong></p>
                <p><span class="choose-file-link" onclick="chooseAnotherFile()">Choose different file</span></p>
            `;
        }

        function chooseAnotherFile() {
            
            fileInput.value = '';
            
            
            dropZone.innerHTML = `
                <div class="upload-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M14 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V8l-6-6zm-1 2l5 5h-5V4zM6 20V4h6v6h6v10H6z"/>
                        <path d="M13 13v4h-2v-4H8l4-4 4 4h-3z"/>
                    </svg>
                </div>
                <p><strong>Drag and Drop File here</strong> or <span class="choose-file-link" onclick="document.getElementById('fileInput').click()">Choose file</span></p>
            `;
            
            
            fileInput.click();
        }

        // Pagination functionality
        function changePage(page) {
            if (page === 'prev') {
                if (currentPage > 1) currentPage--;
            } else if (page === 'next') {
                if (currentPage < totalPages) currentPage++;
            } else {
                currentPage = page;
            }

            updatePagination();
            loadPageContent(currentPage);
        }

        function updatePagination() {
            const buttons = document.querySelectorAll('.pagination button');
            
            // Update active state
            buttons.forEach((btn, index) => {
                if (index === 0 || index === buttons.length - 1) return; // Skip prev/next buttons
                
                const pageNum = index;
                if (pageNum === currentPage) {
                    btn.classList.add('active');
                } else {
                    btn.classList.remove('active');
                }
            });

            // Update prev/next button states
            document.getElementById('prevBtn').disabled = currentPage === 1;
            document.getElementById('nextBtn').disabled = currentPage === totalPages;
        }

        function loadPageContent(page) {
            console.log(`Loading page ${page} content...`);
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
@include('layout.footer') 
</html>
