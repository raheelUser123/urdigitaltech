<?php
$page_title = "Chloe — AI Receptionist for Home Service Businesses | URDigital Tech";
$page_description = "Chloe answers every call, qualifies every lead, and routes every job — 24/7 AI front desk for home service businesses.";
include 'includes/header.php';
?>

<!-- HERO -->
<header style="padding:56px 0 40px;">
  <div class="container center" style="max-width:820px;">
    <div class="eyebrow"><span class="dot"></span>AI Powered Appointments</div>
    <h1>Every call answered. Every lead captured. <span style="color:var(--accent)">Every job routed correctly.</span></h1>
    <p class="center" style="font-size:17px;">Chloe AI Receptionist is a 24/7 front desk system for home service
    businesses. Built for MHR first, now ready for your business.</p>

    <div class="grid grid-3 leddd" style="margin:32px 0;">
      <div class="card center"><h3 style="font-size:16px;">Answers every call, even after hours</h3></div>
      <div class="card center"><h3 style="font-size:16px;">Captures clean job details every time</h3></div>
      <div class="card center"><h3 style="font-size:16px;">Routes calls to the right person</h3></div>
    </div>

    <div class="cta-row" style="justify-content:center;">
      <a href="#strategy-call" class="btn btn-primary">Book your free strategy call</a>
      <a href="#demo-video" class="btn btn-ghost">Watch 60-second playbook</a>
    </div>
    <p class="form-note" style="margin-top:16px;">Want to try it live? Use the chat bubble in the bottom right.</p>
  </div>
</header>

<!-- DEMO VIDEO MAIN PLAYER -->
<section id="demo-video" style="background:var(--surface); border-top:1px solid var(--line); border-bottom:1px solid var(--line); padding:70px 0;">
  <div class="container center" style="max-width:860px;">
    <div class="eyebrow center" style="justify-content:center;"><span class="dot"></span>Full System Playbook</div>
    <h2 style="font-size:clamp(2.2rem, 4vw, 3.8rem); font-weight:800; margin-bottom:12px;">See <span style="color:var(--cyan);">Chloe AI</span> in Action <span class="text-dim" style="font-size:0.55em;">(60 Seconds)</span></h2>
    <p class="center" style="max-width:720px; font-size:1.05rem; margin-bottom:28px;">This is the real flow: first ring &rarr; instant intake &rarr; smart routing &rarr; CRM transcript summary.</p>
    <div class="card" style="padding:10px; background:#050814; border:1px solid rgba(52,230,211,0.3); border-radius:24px; box-shadow:0 30px 80px rgba(0,0,0,0.5);">
      <video controls playsinline preload="metadata" style="width:100%; border-radius:18px; display:block; aspect-ratio:16/9; object-fit:cover;" src="assets/video/chloevideo/Chloe (Reliable Front Desk) (2).mp4"></video>
    </div>
  </div>
</section>

<!-- SPEAK WITH CHLOE CTA SECTION (PROMINENT & KEYFRAME ANIMATED) -->
<section class="speak-chloe-section">
  <div class="container">
    <div class="speak-chloe-card reveal">
      <div class="live-status-badge"><i></i> Chloe is Live & Answering Calls Now (24/7)</div>
      <h2>Speak with <span style="color:var(--cyan);">Chloe AI</span>, try it now!</h2>
      <p class="center" style="max-width:680px; margin:0 auto; font-size:1.1rem; color:#cbd5e1;">Test the 2-second response flow live on your own phone right now. No waiting, no forms required.</p>
      
      <div>
        <a href="tel:7163400767" class="speak-chloe-btn">
          <span>📞</span>
          <span>Dial (716) 340-0767</span>
        </a>
      </div>

      <div class="speak-chloe-features">
        <span>⚡ Answers in &lt; 2 Seconds</span>
        <span>🔒 100% Automated Intake</span>
        <span>📅 Real-Time Dispatch Routing</span>
      </div>
    </div>
  </div>
</section>

<!-- DEMO VIDEO REELS SHOWCASE (PLACED DIRECTLY BELOW SPEAK WITH CHLOE) -->
<section class="video-reels-section">
  <div class="container center">
    <div class="eyebrow center" style="justify-content:center;"><span class="dot"></span>Watch Real Operator Playbooks & Testimonials</div>
    <h2 style="font-size:clamp(2.2rem, 4vw, 3.8rem); font-weight:800; margin-bottom:12px;">Operator Testimonials & <span style="color:var(--cyan);">Chloe Reels</span></h2>
    <p class="center" style="max-width:720px; font-size:1.05rem;">Hover over any reel to play instantly with sound 🔊 (or tap to unmute & play).</p>

    <div class="video-reels-grid">
      <!-- Reel 1: David Royce -->
      <div class="reel-card reveal">
        <span class="reel-badge">▶ Operator Reel</span>
        <span class="reel-sound-icon" title="Hover for Audio">...</span>
        <video class="reel-video" src="assets/video/EXCITED Hey my name s David Royce confidently I m.mp4" playsinline loop preload="metadata" muted></video>
        <div class="reel-overlay-info">
          <h4>David Royce</h4>
          <p>Business Owner</p>
        </div>
      </div>

      <!-- Reel 2: Trevor / Mann Roofing -->
      <div class="reel-card reveal">
        <span class="reel-badge">▶ Roofing Client</span>
        <span class="reel-sound-icon" title="Hover for Audio">...</span>
        <video class="reel-video" src="assets/video/lighthearted Hey quick one I m Trevor with Mann Roofing (1).mp4" playsinline loop preload="metadata" muted></video>
        <div class="reel-overlay-info">
          <h4>Trevor — Mann Roofing</h4>
          <p>Roofing Contractor</p>
        </div>
      </div>

      <!-- Reel 3: CHLOE VIDEO (FEATURED CENTER POSITION) -->
      <div class="reel-card featured-chloe reveal">
        <span class="reel-badge badge-chloe">⭐ Featured Chloe Demo</span>
        <span class="reel-sound-icon" title="Hover for Audio">🔊</span>
        <video class="reel-video" src="assets/video/chloevideo/Chloe (Reliable Front Desk) (2).mp4" playsinline loop preload="metadata" muted></video>
        <div class="reel-overlay-info">
          <h4>Chloe AI Front Desk</h4>
          <p>24/7 Answering Engine</p>
        </div>
      </div>

      <!-- Reel 4: Client Reel 4 -->
      <div class="reel-card reveal">
        <span class="reel-badge">▶ Client Case Study</span>
        <span class="reel-sound-icon" title="Hover for Audio">...</span>
        <video class="reel-video" src="assets/video/video5177314626987100030.mp4" playsinline loop preload="metadata" muted></video>
        <div class="reel-overlay-info">
          <h4>Home Service Operator</h4>
          <p>Call Answering Result</p>
        </div>
      </div>

      <!-- Reel 5: Client Reel 5 -->
      <div class="reel-card reveal">
        <span class="reel-badge">▶ Dispatch Success</span>
        <span class="reel-sound-icon" title="Hover for Audio">...</span>
        <video class="reel-video" src="assets/video/video5179647644632356036.mp4" playsinline loop preload="metadata" muted></video>
        <div class="reel-overlay-info">
          <h4>Dispatch Success</h4>
          <p>24/7 Answering</p>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
  const reelCards = document.querySelectorAll('.reel-card');

  reelCards.forEach(card => {
    const video = card.querySelector('video');
    const soundIcon = card.querySelector('.reel-sound-icon');
    if (!video) return;

    // Hover to play WITH AUDIO
    card.addEventListener('mouseenter', () => {
      video.muted = false;
      video.volume = 1.0;
      const promise = video.play();
      if (promise !== undefined) {
        promise.then(() => {
          if (soundIcon) soundIcon.textContent = '🔊';
        }).catch(() => {
          video.muted = true;
          video.play();
          if (soundIcon) soundIcon.textContent = '🔇';
        });
      }
    });

    // Mouse leave to pause
    card.addEventListener('mouseleave', () => {
      video.pause();
      video.muted = true;
      if (soundIcon) soundIcon.textContent = '🔈';
    });

    // Click to toggle play/pause with sound
    card.addEventListener('click', () => {
      if (video.paused) {
        video.muted = false;
        video.volume = 1.0;
        video.play();
        if (soundIcon) soundIcon.textContent = '🔊';
      } else {
        video.pause();
        if (soundIcon) soundIcon.textContent = '⏸';
      }
    });
  });
});
</script>

<!-- COST OF SILENCE -->
<section style="background:var(--surface); border-top:1px solid var(--line); border-bottom:1px solid var(--line);">
  <div class="container center" style="max-width:760px;">
    <div class="eyebrow center" style="justify-content:center;"><span class="dot"></span>Stop letting leads slip through the cracks</div>
    <h2>The cost of <span style="color:var(--accent-2)">silence</span></h2>
    <p class="center">In the home services industry, speed isn't a luxury, it's your biggest
    competitive advantage. When a customer has a leaking pipe or a broken HVAC unit, they don't
    leave voicemails — they call the next name on the list. If you aren't answering, you aren't earning.</p>
  </div>
  <div class="container grid grid-3" style="margin-top:32px;">
    <div class="card">
      <h3>Busy crews don't answer</h3>
      <p class="mb-0">Techs are on site working. Phones keep ringing, and money stays on the table.</p>
    </div>
    <div class="card">
      <h3>After-hours voicemail</h3>
      <p class="mb-0">Emergencies don't wait for business hours. Silence sends them to your competitors.</p>
    </div>
    <div class="card">
      <h3>Overwhelmed office staff</h3>
      <p class="mb-0">Intake piles up, details get missed, and your team spends the day playing phone tag.</p>
    </div>
  </div>
  <div class="container grid grid-2" style="margin-top:20px;">
    <div class="card">
      <h3>The "fastest finger" rule</h3>
      <p class="mb-0">Statistics show the first company to answer the phone usually gets the job.</p>
    </div>
    <div class="card">
      <h3>Redundant intake</h3>
      <p class="mb-0">Asking the same questions and taking the same notes every day is a drain on your time.</p>
    </div>
  </div>
</section>

<!-- CORE PROMISE / WORKFLOW -->
<section>
  <div class="container center" style="max-width:760px;">
    <div class="eyebrow center" style="justify-content:center;"><span class="dot"></span>What Chloe actually does</div>
    <h2>The core <span style="color:var(--accent)">promise</span></h2>
    <p class="center">Chloe acts as your tireless front desk, managing every inbound call and website
    chat with professional speed. By filtering the noise and capturing the data, she ensures your
    team only spends time on real jobs and revenue generating tasks.</p>
  </div>

  <div class="container grid grid-3" style="margin-top:32px;">
    <div class="card">
      <h3>Step 1 — The intake</h3>
      <p class="mb-0">Phone call or website chat comes in, day or night.</p>
    </div>
    <div class="card">
      <h3>The logic</h3>
      <p class="mb-0">Chloe answers instantly, qualifies the lead, gathers details, answers FAQs.</p>
    </div>
    <div class="card">
      <h3>Step 3 — The integration</h3>
      <p class="mb-0">Ready-to-work data is pushed directly to your CRM, email, and calendar.</p>
    </div>
  </div>
  <p class="center text-dim" style="margin-top:24px;">Your team only gets clean, qualified requests — not noise.</p>
</section>

<!-- FIRST RING TO FINAL BOOKING -->
<section style="background:var(--surface); border-top:1px solid var(--line); border-bottom:1px solid var(--line);">
  <div class="container center" style="max-width:760px;">
    <div class="eyebrow center" style="justify-content:center;"><span class="dot"></span>The 24/7 response engine</div>
    <h2>From <span style="color:var(--accent)">first ring</span> to final booking</h2>
    <p class="center">Experience the seamless flow of a perfectly managed intake process. Chloe ensures
    every customer touchpoint is handled with precision, speed, and the battle-tested reliability proven at MHR.</p>
  </div>

  <div class="container" style="margin-top:32px; display:flex; flex-direction:column; gap:24px;">
    <div class="step">
      <div class="step-num">01</div>
      <div><h3>Instant connection</h3><p class="mb-0">Customer calls or chats. Instead of a cold voicemail, they get an immediate, professional greeting.</p></div>
    </div>
    <div class="step">
      <div class="step-num">02</div>
      <div><h3>Zero wait time</h3><p class="mb-0">Chloe answers instantly. No hold music, no "please wait," and absolutely zero missed opportunities.</p></div>
    </div>
    <div class="step">
      <div class="step-num">03</div>
      <div><h3>Smart qualification</h3><p class="mb-0">Chloe qualifies the job: service type, location, urgency, and full contact info, automatically.</p></div>
    </div>
    <div class="step">
      <div class="step-num">04</div>
      <div><h3>Intelligent routing</h3><p class="mb-0">Chloe routes the lead. Sends the info to your primary tech first; if they're busy, she moves to your backup instantly.</p></div>
    </div>
    <div class="step">
      <div class="step-num">05</div>
      <div><h3>Full transparency</h3><p class="mb-0">Everything is logged. You receive a clean summary, transcript, and clear next steps in your inbox or CRM.</p></div>
    </div>
  </div>
</section>

<!-- LIVE CALL TICKER -->
<section>
  <div class="container">
    <h2 class="center">See it working, right now</h2>
    <div class="ticker" style="max-width:760px; margin:0 auto;">
      <div class="ticker-head">
        <span>Live call log</span>
        <span class="live"><span class="live-pulse"></span>Answering now</span>
      </div>
      <div class="ticker-row">
        <span class="t">2:41 PM</span><span class="caller">M. Alvarez</span><span class="job">Water heater leak</span>
        <span class="status routed">Routed to crew</span>
      </div>
      <div class="ticker-row">
        <span class="t">2:38 PM</span><span class="caller">D. Chen</span><span class="job">AC not cooling</span>
        <span class="status booked">Booked · Thu 9AM</span>
      </div>
      <div class="ticker-row">
        <span class="t">11:52 PM</span><span class="caller">R. Foster</span><span class="job">Breaker tripping</span>
        <span class="status routed">Routed · after hours</span>
      </div>
    </div>
  </div>
</section>

<!-- WHO IT'S FOR -->
<section style="background:var(--surface); border-top:1px solid var(--line); border-bottom:1px solid var(--line);">
  <div class="container">
    <h2 class="center">Who it's <span style="color:var(--accent)">for</span> / not for</h2>
    <div class="grid grid-2" style="margin-top:24px;">
      <div class="card">
        <h3>Built for</h3>
        <ul style="padding-left:20px; margin:0; color:var(--text-dim);">
          <li>Construction &amp; home service businesses</li>
          <li>Teams with real inbound call volume</li>
          <li>Businesses missing calls or details</li>
          <li>Multi-crew dispatch operations</li>
        </ul>
      </div>
      <div class="card">
        <h3>Not for</h3>
        <ul style="padding-left:20px; margin:0; color:var(--text-dim);">
          <li>Businesses with no inbound call volume</li>
          <li>People just testing AI</li>
          <li>Complex custom call centers (unless Enterprise tier)</li>
        </ul>
      </div>
    </div>
    <p class="center text-dim" style="margin-top:20px;">Built under real inbound volume. Tested for high-performance reliability.</p>
  </div>
</section>

<!-- TESTIMONIALS -->
<section>
  <div class="container">
    <h2 class="center">What operators are saying</h2>
    <div class="grid grid-3" style="margin-top:24px;">
      <div class="card">
        <div style="color:var(--accent-2); margin-bottom:10px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        <h3>The "human-like" experience</h3>
        <p class="mb-0">We were skeptical about how clients would react to an AI, but Chloe's voice tone
        is incredibly natural. Most callers don't even realize they're speaking to an AI — they just
        appreciate getting their questions answered instantly.</p>
      </div>
      <div class="card">
        <div style="color:var(--accent-2); margin-bottom:10px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        <h3>The "efficiency" powerhouse</h3>
        <p class="mb-0">In real estate, a missed call is a missed commission. Chloe handles our entire
        inbound volume 24/7 without a single glitch. She's doing the work of two full-time
        receptionists with zero overhead.</p>
      </div>
      <div class="card">
        <div style="color:var(--accent-2); margin-bottom:10px;">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        <h3>The "seamless booking"</h3>
        <p class="mb-0">The integration with our calendar is flawless. Chloe doesn't just convert
        leads, she books them. Our manual bookings have dropped by 90%, letting our team focus on
        high-value work instead of scheduling.</p>
      </div>
    </div>
  </div>
</section>

<!-- PRICING -->
<section id="pricing" style="background:var(--surface); border-top:1px solid var(--line); border-bottom:1px solid var(--line);">
  <div class="container center" style="max-width:760px;">
    <h2>How Chloe <span style="color:var(--accent)">pricing</span> works</h2>
    <p class="center">Chloe pricing includes:</p>
    <div class="grid grid-3">
      <div class="card center"><h3 style="font-size:16px;">Custom system build</h3></div>
      <div class="card center"><h3 style="font-size:16px;">Monthly platform &amp; optimization</h3></div>
      <div class="card center"><h3 style="font-size:16px;">Usage-based minutes</h3></div>
    </div>
    <p class="center" style="margin-top:20px;">Exact onboarding investment is determined during your FREE
    strategy call based on complexity and routing logic.</p>
    <a href="#strategy-call" class="btn btn-primary">Book your free strategy call</a>
  </div>

  <div class="container grid pricing-grid" style="grid-template-columns:repeat(4,1fr); margin-top:40px;">
    <div class="price-card">
      <h3>Starter</h3>
      <div class="price">$199<span>/month</span></div>
      <p class="mb-0 form-note">+ $0.35/min usage · Build: 5–7 business days</p>
      <p class="mb-0 form-note">Best for: solo operators, single location</p>
      <ul>
        <li>1 dedicated phone number</li>
        <li>Custom brand voice &amp; script</li>
        <li>24/7 answering</li>
        <li>Lead qualification</li>
        <li>Calendar booking integration</li>
        <li>Missed call text-back</li>
        <li>Call transcripts</li>
        <li>Emergency escalation</li>
        <li>Dashboard access</li>
        <li>FAQ handling</li>
        <li>1 revision cycle</li>
        <li>Testing gate before launch</li>
      </ul>
      <a href="#strategy-call" class="btn btn-ghost btn-block">Book free strategy call</a>
    </div>

    <div class="price-card">
      <h3>Professional</h3>
      <div class="price">$499<span>/month</span></div>
      <p class="mb-0 form-note">+ $0.35/min usage · Build: 7–10 business days</p>
      <p class="mb-0 form-note">Best for: shops/businesses missing calls, losing leads</p>
      <ul>
        <li>Everything in Starter</li>
        <li>Up to 3 call queues</li>
        <li>Up to 3 scripts</li>
        <li>Advanced CRM workflows</li>
        <li>Lead scoring</li>
        <li>Conversion reporting</li>
        <li>After-hours decision tree</li>
        <li>2 revision cycles</li>
      </ul>
      <a href="#strategy-call" class="btn btn-ghost btn-block">Book free strategy call</a>
    </div>

    <div class="price-card featured">
      <h3>Growth</h3>
      <div class="price">$899<span>/month</span></div>
      <p class="mb-0 form-note">+ $0.35/min usage · Build: 10–15 business days</p>
      <p class="mb-0 form-note">Best for: scaling teams, multiple departments with CRM needs</p>
      <ul>
        <li>Everything in Professional</li>
        <li>5+ departments</li>
        <li>Advanced scoring logic</li>
        <li>Multi-crew scheduling</li>
        <li>Outbound sequences</li>
        <li>Reporting warehouse</li>
        <li>Escalation &amp; paging</li>
        <li>White-glove launch</li>
        <li>3+ revision cycles</li>
      </ul>
      <a href="#strategy-call" class="btn btn-primary btn-block" style="animation:none;">Book free strategy call</a>
    </div>

    <div class="price-card">
      <h3>Enterprise</h3>
      <div class="price">$1,499<span>+/month</span></div>
      <p class="mb-0 form-note">Volume pricing · Build: 3–4 weeks</p>
      <p class="mb-0 form-note">Best for: franchises and large operations</p>
      <p style="font-weight:600; font-size:13px; margin-bottom:6px;">Custom scope:</p>
      <ul>
        <li>Multi-location</li>
        <li>Franchise systems</li>
        <li>Call center operations</li>
        <li>Premium LLM tuning</li>
        <li>Dedicated account management</li>
      </ul>
      <a href="#strategy-call" class="btn btn-ghost btn-block">Book free strategy call</a>
    </div>
  </div>
</section>

<!-- STRATEGY CALL FORM (scheduling) -->
<section id="strategy-call">
  <div class="container grid grid-2" style="align-items:start;">
    <div>
      <div class="eyebrow"><span class="dot"></span>Free strategy call</div>
      <h2>See if Chloe fits your operation</h2>
      <p>We'll walk through real call scenarios exactly like the ones your business handles today —
      no pressure, no scripts. Pick a time that works and we'll take it from there.</p>
      <p class="text-dim">Prefer to talk now? <a href="tel:7163400767" style="color:var(--accent);">Dial 716-340-0767</a></p>
    </div>

    <form id="lead-form" class="card" action="/contact-handler.php" method="post">
      <div id="form-status"></div>
      <div class="form-field">
        <label for="name">Full name</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-field">
        <label for="business">Business name</label>
        <input type="text" id="business" name="business">
      </div>
      <div class="form-field">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-field">
        <label for="phone">Phone</label>
        <input type="tel" id="phone" name="phone" required>
      </div>
      <div class="form-field">
        <label for="preferred_date">Preferred date</label>
        <input type="date" id="preferred_date" name="preferred_date">
      </div>
      <div class="form-field">
        <label for="preferred_time">Preferred time</label>
        <input type="time" id="preferred_time" name="preferred_time">
      </div>
      <div class="form-field">
        <label for="message">What's going on with your calls today?</label>
        <textarea id="message" name="message"></textarea>
      </div>
      <input type="hidden" name="form_type" value="strategy_call">
      <button type="submit" class="btn btn-primary btn-block">Book your free strategy call</button>
      <p class="form-note" style="margin-top:12px;">We'll confirm your slot by email within one business day.</p>
    </form>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
