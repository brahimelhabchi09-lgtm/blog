<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Author Dashboard - The Daily Oracle</title>
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&amp;family=Noto+Sans:wght@400;500;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#d41142",
                        "background-light": "#f8f6f6",
                        "background-dark": "#221015",
                        "surface-dark": "#2d1a1f",
                        "surface-border": "#543b41",
                        "text-parchment": "#e8e1e3",
                        "text-muted": "#b99da4",
                    },
                    fontFamily: {
                        "display": ["Newsreader", "serif"],
                        "sans": ["Noto Sans", "sans-serif"],
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        /* Custom scrollbar for webkit */
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #221015;
        }

        ::-webkit-scrollbar-thumb {
            background: #543b41;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #d41142;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark font-display text-text-parchment overflow-x-hidden antialiased">
    <div class="relative flex h-screen w-full overflow-hidden">
   <?php include 'author_sideBar.view.php'; ?>

    <?php include $viewFile; ?>
    </div>
</body>

</html>