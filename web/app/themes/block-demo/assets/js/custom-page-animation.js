(function($, gsap, SplitText) {
  gsap.to($(".animation"), { autoAlpha: 1 });

  const title = $(".title").get(0);
  const splitTitle = SplitText.create(title, {
    type: 'chars',
  });
  gsap.fromTo(
    splitTitle.chars,
    {
      opacity: 0.2,
    },
    {
      opacity: 1,
      stagger: 0.075,
      scrollTrigger: title,
    },
  );

  for (const child of $(".content").children()) {
    gsap.from(child, {
      opacity: 0,
      delay: 0.2,
      scrollTrigger: child,
    });
  }
})(jQuery, gsap, SplitText);