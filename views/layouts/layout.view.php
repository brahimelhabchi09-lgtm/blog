<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Hogwarts Intranet - Announcements</title>
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&amp;family=Noto+Sans:wght@400;500;700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=MedievalSharp&amp;family=Newsreader:ital,opsz,wght@0,6..72,200..800;1,6..72,200..800&amp;family=Pinyon+Script&amp;display=swap" rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#f4d125", // Gold
                        "primary-dark": "#b89c12",
                        "background-light": "#f8f8f5",
                        "background-dark": "#181711", // Dark Castle
                        "burgundy": "#5d1818",
                        "hogwarts-green": "#1a472a",
                        "parchment": "#e3dac3",
                        "parchment-dark": "#2b2920",
                        "forest-green": "#0b2b1a",
                        "gold": "#d4af37"
                    },
                    fontFamily: {
                        "display": ["Newsreader", "serif"],
                        "body": ["Noto Sans", "sans-serif"],
                        "display": ["MedievalSharp", "serif"],
                        "handwritten": ["Pinyon Script", "cursive"],
                        "serif": ["Newsreader", "serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    backgroundImage: {
                        'parchment-texture': "linear-gradient(rgba(255, 255, 255, 0.05), rgba(255, 255, 255, 0.05))",
                    }
                },
            },
        }
    </script>
    <style>
        /* Custom scrollbar for webkit */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #181711;
        }

        ::-webkit-scrollbar-thumb {
            background: #393628;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #f4d125;
        }

        .glass-panel {
            background: rgba(39, 37, 27, 0.7);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(244, 209, 37, 0.1);
        }

        .gold-border-bottom {
            border-bottom: 1px solid #393628;
            box-shadow: 0 1px 0 0 rgba(244, 209, 37, 0.1);
        }
    </style>
    <style type="text/tailwindcss">
        @layer utilities {
            .parchment-scroll {
                background-color: #e5d3b3;
                background-image: 
                    url("https://www.transparenttextures.com/patterns/natural-paper.png"),
                    radial-gradient(circle at center, transparent 0%, rgba(0,0,0,0.05) 100%);
                box-shadow: 
                    0 0 50px rgba(0,0,0,0.5),
                    inset 0 0 100px rgba(139, 101, 8, 0.2);
                border: 1px solid #c4a484;
                position: relative;
            }
            .parchment-scroll::before, .parchment-scroll::after {
                content: '';
                position: absolute;
                left: -20px;
                right: -20px;
                height: 40px;
                background: #d2b48c;
                border: 4px solid #8b4513;
                border-radius: 20px;
                z-index: -1;
            }
            .parchment-scroll::before { top: -20px; }
            .parchment-scroll::after { bottom: -20px; }
            .magical-glow {
                box-shadow: 0 0 15px 5px rgba(242, 185, 13, 0.4);
                transition: all 0.4s ease;
            }
            .magical-glow:hover {
                box-shadow: 0 0 30px 10px rgba(242, 185, 13, 0.7);
                transform: scale(1.02);
            }
            .floating-candle {
                position: absolute;
                width: 2px;
                height: 40px;
                background: rgba(255, 255, 255, 0.1);
                box-shadow: 0 -10px 15px 2px rgba(242, 185, 13, 0.3);
            }
            .input-ink {
                background: transparent;
                border: none;
                border-bottom: 2px solid rgba(74, 4, 4, 0.2);
                border-radius: 0;
                transition: border-color 0.3s ease;
                font-family: 'Newsreader', serif;
                font-style: italic;
            }
            .input-ink:focus {
                ring: 0;
                border-bottom-color: #4a0404;
                box-shadow: none;
            }
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-[#181711] dark:text-white font-display overflow-x-hidden min-h-screen flex flex-col">
    <?php include 'header.view.php'; ?>

    <?php include $viewFile; ?>

    <?php include 'footer.view.php'; ?>
</body>

</html>