<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Hogwarts Admin Dashboard</title>
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
                        "primary": "#d41152",
                        "background-light": "#f8f6f6",
                        "background-dark": "#221016",
                        "parchment": "#e3dacb",
                        "gold": "#bfa15f",
                    },
                    fontFamily: {
                        "display": ["Newsreader", "serif"],
                        "body": ["Noto Sans", "sans-serif"],
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
        /* Custom scrollbar for the magical feel */
        ::-webkit-scrollbar {
            width: 10px;
            height: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #1a0b0f;
        }

        ::-webkit-scrollbar-thumb {
            background: #543b43;
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #d41152;
        }
    </style>
    <style>.parchment-texture {
    background-color: #f4e9d5;
    background-image: url(https://lh3.googleusercontent.com/aida-public/AB6AXuB4KXqX7QCkO8SOKtt58hfDf1DGUM_FTxBNVsa9Ze5RFe0xmVf5S3_YzUOnTc4X6tRt8eQMHOgfjbuBQgSx9Vb1w_wFK3yCg26T8iM2XUn6IFejYp2hpkAhHd_R7QyeYLLdWDrcfp2ceFf3k2tGDsnVTK_lSyvgiSSumtKxP2W71VGjwk9KFE8XLZFe8GrnH7j-Zss6bSUwtPyfkdW6XVRvF7ki43nHaHIL4DdvwuN9OSw_Grl2x16mEO2DspBM852loLVKAKj-nai1);
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5), inset 0 0 100px rgba(185, 157, 166, 0.2)
    }
.glow-button {
    box-shadow: 0 0 15px rgba(212, 17, 82, 0.6), 0 0 5px rgba(255, 215, 0, 0.4);
    transition: all 0.3s ease
    }
.glow-button:hover {
    box-shadow: 0 0 25px rgba(212, 17, 82, 0.8), 0 0 10px rgba(255, 215, 0, 0.6);
    transform: translatey(-1px)
    }
.handwritten-id {
    font-style: italic;
    opacity: 0.6;
    letter-spacing: 0.05em
    }</style>
</head>

<body class="bg-background-light dark:bg-background-dark text-[#181113] dark:text-white font-display overflow-hidden">
    <div class="flex h-screen w-full flex-col md:flex-row overflow-hidden">
      <?php include 'admin_sideBar.view.php'; ?>

    <?php include $viewFile; ?>

</div>

</body>

</html>