(() => {
  const toggle = document.querySelector('[data-nav-toggle]');
  const nav = document.querySelector('[data-nav]');
  const header = document.querySelector('[data-header]');
  const menuTrigger = document.querySelector('[data-menu-trigger]');
  const megaMenu = document.querySelector('[data-mega-menu]');

  if (toggle && nav) {
    toggle.addEventListener('click', () => {
      const isOpen = toggle.getAttribute('aria-expanded') === 'true';
      toggle.setAttribute('aria-expanded', String(!isOpen));
      nav.classList.toggle('is-open', !isOpen);
      document.body.classList.toggle('nav-open', !isOpen);
    });

    nav.querySelectorAll('a').forEach((link) => {
      link.addEventListener('click', () => {
        toggle.setAttribute('aria-expanded', 'false');
        nav.classList.remove('is-open');
        document.body.classList.remove('nav-open');
      });
    });
  }

  if (menuTrigger && megaMenu) {
    const closeMegaMenu = () => {
      menuTrigger.setAttribute('aria-expanded', 'false');
      megaMenu.hidden = true;
      document.body.classList.remove('mega-menu-open');
    };

    const openMegaMenu = () => {
      menuTrigger.setAttribute('aria-expanded', 'true');
      megaMenu.hidden = false;
      document.body.classList.add('mega-menu-open');
    };

    menuTrigger.addEventListener('click', () => {
      const isOpen = menuTrigger.getAttribute('aria-expanded') === 'true';
      isOpen ? closeMegaMenu() : openMegaMenu();
    });

    megaMenu.querySelectorAll('a').forEach((link) => {
      link.addEventListener('click', closeMegaMenu);
    });

    document.addEventListener('keydown', (event) => {
      if (event.key === 'Escape') closeMegaMenu();
    });

    document.addEventListener('click', (event) => {
      if (megaMenu.hidden) return;
      if (megaMenu.contains(event.target) || menuTrigger.contains(event.target)) return;
      closeMegaMenu();
    });
  }

  if (header) {
    const updateHeader = () => header.classList.toggle('is-scrolled', window.scrollY > 24);
    updateHeader();
    window.addEventListener('scroll', updateHeader, { passive: true });
  }

  const reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const reveals = document.querySelectorAll('.reveal');

  if (reducedMotion || !('IntersectionObserver' in window)) {
    reveals.forEach((el) => el.classList.add('is-visible'));
  } else {
    const revealObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach((entry) => {
        if (!entry.isIntersecting) return;
        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target);
      });
    }, { threshold: 0.14, rootMargin: '0px 0px -8% 0px' });
    reveals.forEach((el) => revealObserver.observe(el));
  }

  const lifecycle = document.querySelector('[data-lifecycle]');
  if (lifecycle) {
    const buttons = [...lifecycle.querySelectorAll('[data-stage]')];
    const panels = [...lifecycle.querySelectorAll('[data-stage-panel]')];

    const setStage = (stage) => {
      lifecycle.dataset.progress = stage;
      buttons.forEach((button) => {
        const active = button.dataset.stage === stage;
        button.classList.toggle('is-active', active);
        button.setAttribute('aria-pressed', String(active));
      });
      panels.forEach((panel) => {
        panel.hidden = panel.dataset.stagePanel !== stage;
      });
    };

    buttons.forEach((button) => button.addEventListener('click', () => setStage(button.dataset.stage)));
    setStage('1');
  }

  const programTabs = document.querySelector('[data-program-tabs]');
  if (programTabs) {
    const tabs = [...programTabs.querySelectorAll('[data-program]')];
    const panels = [...programTabs.querySelectorAll('[data-program-panel]')];

    const setProgram = (program) => {
      tabs.forEach((tab) => {
        const active = tab.dataset.program === program;
        tab.classList.toggle('is-active', active);
        tab.setAttribute('aria-selected', String(active));
      });
      panels.forEach((panel) => {
        const active = panel.dataset.programPanel === program;
        panel.hidden = !active;
        panel.classList.toggle('is-active', active);
      });
    };

    tabs.forEach((tab, index) => {
      tab.addEventListener('click', () => setProgram(tab.dataset.program));
      tab.addEventListener('keydown', (event) => {
        if (!['ArrowRight', 'ArrowLeft'].includes(event.key)) return;
        event.preventDefault();
        const delta = event.key === 'ArrowRight' ? 1 : -1;
        const next = tabs[(index + delta + tabs.length) % tabs.length];
        next.focus();
        setProgram(next.dataset.program);
      });
    });
    setProgram('1');
  }

  const methodFlow = document.querySelector('[data-method-flow]');
  if (methodFlow && 'IntersectionObserver' in window && !reducedMotion) {
    const steps = [...methodFlow.querySelectorAll('.method-step')];
    const line = methodFlow.querySelector('.method-flow-line span');

    const updateLine = () => {
      const activeIndex = Math.max(0, steps.findIndex((step) => step.classList.contains('is-active')));
      if (line) line.style.height = ((activeIndex / Math.max(1, steps.length - 1)) * 100) + '%';
    };

    const stepObserver = new IntersectionObserver((entries) => {
      const visible = entries.filter((entry) => entry.isIntersecting).sort((a, b) => b.intersectionRatio - a.intersectionRatio)[0];
      if (!visible) return;
      steps.forEach((step) => step.classList.toggle('is-active', step === visible.target));
      updateLine();
    }, { threshold: [0.45, 0.7], rootMargin: '-18% 0px -35% 0px' });

    steps.forEach((step) => stepObserver.observe(step));
    updateLine();
  }
})();
