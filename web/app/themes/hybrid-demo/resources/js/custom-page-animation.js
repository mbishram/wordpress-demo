import { gsap } from './gsap';
import { SplitText } from 'gsap/SplitText';

export default () => ({
  init() {
    gsap.to(this.$refs.animation, { autoAlpha: 1 });

    const title = this.$refs.title;
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

    for (const child of this.$refs.content.children) {
      gsap.from(child, {
        opacity: 0,
        delay: 0.2,
        scrollTrigger: child,
      });
    }
  },
});
