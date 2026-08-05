<?php require_once __DIR__.'/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars(SITE_NAME) ?> — Coming Soon</title>
<meta name="description" content="<?= htmlspecialchars(SITE_TAGLINE) ?>">
<link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🕯️</text></svg>">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,500;0,600;1,500;1,600&family=Caveat:wght@500;700&family=Jost:wght@400;500;600&display=swap" rel="stylesheet">

<script src="https://cdn.tailwindcss.com"></script>
<script>
  tailwind.config = {
    theme: {
      extend: {
        colors: {
          parchment: '#f2ece0',
          parchment2: '#e9e0cf',
          ink: '#2a2420',
          forest: '#24402e',
          forest2: '#1a3022',
          burgundy: '#7c2836',
          teal: '#4c7a85',
          gold: '#b8892b',
          wood: '#6b4a32',
        },
        fontFamily: {
          display: ['"Cormorant Garamond"', 'serif'],
          script: ['"Caveat"', 'cursive'],
          body: ['"Jost"', 'sans-serif'],
        },
      },
    },
  };
</script>

<style>
  body {
    background-color: #f2ece0;
    background-image:
      radial-gradient(circle at 15% 20%, rgba(36,64,46,0.05), transparent 40%),
      radial-gradient(circle at 85% 80%, rgba(124,40,54,0.06), transparent 45%),
      repeating-linear-gradient(0deg, rgba(42,36,32,0.025) 0px, rgba(42,36,32,0.025) 1px, transparent 1px, transparent 3px);
  }
  .stitch-border {
    border: 2px dashed rgba(42,36,32,0.35);
    border-radius: 1.75rem;
  }
  .hoop {
    box-shadow:
      0 0 0 6px #f2ece0,
      0 0 0 9px rgba(107,74,50,0.55),
      0 0 0 10px rgba(42,36,32,0.15);
  }
  .squiggle-divider {
    display: block;
    margin: 0 auto;
  }
  input[type="checkbox"].stitch-check {
    accent-color: #24402e;
  }
  .btn-wobble:hover { transform: rotate(-1deg) scale(1.03); }
  .link-underline {
    background-image: linear-gradient(#7c2836, #7c2836);
    background-size: 100% 1px;
    background-position: 0 100%;
    background-repeat: no-repeat;
  }
</style>
</head>
<body class="font-body text-ink min-h-screen flex flex-col items-center justify-center px-4 py-16">

  <main class="w-full max-w-xl text-center">

    <!-- squiggly tentacle-ish flourish -->
    <svg class="squiggle-divider mb-6" width="140" height="28" viewBox="0 0 140 28" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M4 14 C 20 2, 30 26, 46 14 S 66 2, 80 14 S 100 26, 116 14 S 132 4, 136 14"
            stroke="#7c2836" stroke-width="2.5" stroke-linecap="round"/>
    </svg>

    <p class="uppercase tracking-[0.35em] text-xs md:text-sm text-forest font-medium mb-3">
      Coming Soon
    </p>

    <h1 class="font-display italic text-5xl sm:text-6xl md:text-7xl font-semibold text-ink leading-[1.05] mb-4">
      Art <span class="text-burgundy">by</span> Ashley
    </h1>

    <p class="font-script text-2xl md:text-3xl text-teal mb-6 -rotate-1">
      clay creatures &amp; circuit critters, made to order
    </p>

    <p class="text-ink/80 leading-relaxed max-w-md mx-auto mb-10">
      A little dark academia, a little unhinged, entirely handmade.
      I sculpt clay oddities and solder up circuit-board curiosities in
      small, made-to-order batches — no two exactly alike, all of them
      a bit too charming for their own good. The shop's still being
      built, but the good stuff is on its way.
    </p>

    <!-- Signup card, styled like an embroidery hoop -->
    <div class="hoop bg-parchment2/70 stitch-border p-8 sm:p-10 mb-10 mx-auto max-w-md">
      <p class="font-display text-2xl font-semibold mb-1">Be first to know</p>
      <p class="text-sm text-ink/70 mb-6">
        Launch news, made-to-order drops, and the occasional unhinged behind-the-scenes.
      </p>

      <form id="launch-form" class="text-left space-y-4" novalidate>
        <div>
          <label for="email" class="sr-only">Email address</label>
          <input
            type="email" id="email" name="email" required
            placeholder="you@example.com"
            class="w-full rounded-full border border-ink/25 bg-parchment px-5 py-3 text-sm
                   placeholder:text-ink/40 focus:outline-none focus:ring-2 focus:ring-forest/50"
          >
        </div>

        <label class="flex items-start gap-2.5 text-sm text-ink/80 cursor-pointer">
          <input type="checkbox" id="not_robot" name="not_robot" required class="stitch-check mt-0.5 h-4 w-4 rounded">
          <span>I'm not a robot (I'm just a person who likes clay tentacles).</span>
        </label>

        <label class="flex items-start gap-2.5 text-sm text-ink/80 cursor-pointer">
          <input type="checkbox" id="consent_given" name="consent_given" required class="stitch-check mt-0.5 h-4 w-4 rounded">
          <span>I consent to receiving marketing emails from Art by Ashley. Unsubscribe any time, no hard feelings.</span>
        </label>

        <button
          type="submit"
          class="btn-wobble transition-transform w-full rounded-full bg-forest text-parchment
                 font-medium tracking-wide py-3 text-sm uppercase hover:bg-forest2"
        >
          Claim My Spot
        </button>

        <p id="form-message" class="text-sm text-center pt-1" role="status" aria-live="polite"></p>
      </form>
    </div>

    <svg class="squiggle-divider mb-6" width="140" height="28" viewBox="0 0 140 28" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path d="M4 14 C 20 26, 30 2, 46 14 S 66 26, 80 14 S 100 2, 116 14 S 132 24, 136 14"
            stroke="#24402e" stroke-width="2.5" stroke-linecap="round"/>
    </svg>

    <footer class="text-xs text-ink/60 space-y-2">
      <p>
        Questions, commissions, or just want to say hi early?
        <a href="mailto:<?= htmlspecialchars(SITE_EMAIL) ?>" class="link-underline text-burgundy font-medium">
          <?= htmlspecialchars(SITE_EMAIL) ?>
        </a>
      </p>
      <p>&copy; <?= date('Y') ?> <?= htmlspecialchars(SITE_NAME) ?>. Handmade, made-to-order, made with a little chaos.</p>
    </footer>

  </main>

  <script src="assets/js/launch-form.js"></script>
</body>
</html>
