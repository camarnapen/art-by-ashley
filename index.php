<?php require_once __DIR__.'/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars(SITE_NAME) ?> — Coming Soon</title>
<meta name="description" content="<?= htmlspecialchars(SITE_TAGLINE) ?>">
<meta name="color-scheme" content="dark">
<link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🕯️</text></svg>">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Jost:wght@400;500;600&display=swap" rel="stylesheet">

<script src="https://cdn.tailwindcss.com"></script>
<script>
  tailwind.config = {
    theme: {
      extend: {
        colors: {
          plum: '#140f18',
          plum2: '#1d1622',
          bone: '#ece7f0',
          bone2: '#bdb3c9',
          cyan: '#35e0c8',
          berry: '#e83f74',
          violet: '#8b7cd6',
        },
        fontFamily: {
          poster: ['"Bebas Neue"', 'sans-serif'],
          body: ['"Jost"', 'sans-serif'],
        },
      },
    },
  };
</script>

<style>
  body {
    background-color: #140f18;
    background-image:
      radial-gradient(circle at 12% 15%, rgba(53,224,200,0.07), transparent 40%),
      radial-gradient(circle at 88% 85%, rgba(232,63,116,0.09), transparent 45%);
  }
  input[type="checkbox"].poster-check {
    accent-color: #35e0c8;
  }
  .btn-punch:hover { transform: translateY(-1px); }
  .btn-punch:active { transform: translateY(0); }
  .link-underline {
    background-image: linear-gradient(#e83f74, #e83f74);
    background-size: 100% 1px;
    background-position: 0 100%;
    background-repeat: no-repeat;
  }
</style>
</head>
<body class="font-body text-bone min-h-screen flex flex-col items-center justify-center px-4 py-16">

  <main class="w-full max-w-xl text-center">

    <span class="inline-block font-poster text-sm tracking-[0.2em] border-2 border-berry text-berry px-5 py-2 mb-7 -rotate-2">
      Coming Soon
    </span>

    <h1 class="font-poster text-6xl sm:text-7xl md:text-8xl tracking-wide leading-[0.95] mb-4">
      Art <span class="text-berry">by</span> Ashley
    </h1>

    <p class="font-poster text-cyan text-base sm:text-lg tracking-[0.18em] mb-8">
      No Two Alike &middot; Made to Order &middot; Made by Me
    </p>

    <p class="text-bone2 leading-relaxed max-w-md mx-auto mb-10">
      A little unhinged; entirely handmade. I make weird sculptures, abstract paintings, and whatever other oddities come out of my strange brain. No two pieces are exactly alike, and yes, customization's on the table. Sign up below, and be one of the first to see what's in stock!
    </p>

    <!-- Signup card -->
    <div class="bg-plum2 border-2 border-berry p-8 sm:p-10 mb-10 mx-auto max-w-md">
      <p class="font-poster text-2xl tracking-wide mb-1">Join the party</p>
      <p class="text-sm text-bone2 mb-6">
        Launch news, made-to-order drops, and the occasional unhinged behind-the-scenes.
      </p>

      <form id="launch-form" class="text-left space-y-4" novalidate>
        <div>
          <label for="email" class="sr-only">Email address</label>
          <input
            type="email" id="email" name="email" required
            placeholder="you@example.com"
            class="w-full border border-bone/25 bg-plum px-5 py-3 text-sm text-bone
                   placeholder:text-bone/40 focus:outline-none focus:ring-2 focus:ring-cyan/50"
          >
        </div>

        <label class="flex items-start gap-2.5 text-sm text-bone2 cursor-pointer">
          <input type="checkbox" id="not_robot" name="not_robot" required class="poster-check mt-0.5 h-4 w-4">
          <span>I'm not a robot (I'm just a person who likes clay tentacles).</span>
        </label>

        <label class="flex items-start gap-2.5 text-sm text-bone2 cursor-pointer">
          <input type="checkbox" id="consent_given" name="consent_given" required class="poster-check mt-0.5 h-4 w-4">
          <span>I consent to receiving marketing emails from Ashley. Unsubscribe any time, no hard feelings.</span>
        </label>

        <button
          type="submit"
          class="btn-punch transition-transform w-full bg-cyan text-plum
                 font-poster tracking-[0.1em] py-3 text-lg uppercase hover:bg-cyan/90"
        >
          Subscribe
        </button>

        <p id="form-message" class="text-sm text-center pt-1" role="status" aria-live="polite"></p>
      </form>
    </div>

    <footer class="text-xs text-bone2 space-y-2">
      <p>&copy; <?= date('Y') ?> <?= htmlspecialchars(SITE_NAME) ?></p>
    </footer>

  </main>

  <script src="assets/js/launch-form.js"></script>
</body>
</html>
