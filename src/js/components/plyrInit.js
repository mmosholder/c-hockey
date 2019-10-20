import * as Plyr from 'plyr';

const plyrOptions = {
  clickToPlay: false,
  displayDuration: false,
  controls: [],
  muted: true,
  autoplay: true,
  loop: {active: true}
}

const players = Plyr.setup('.ch-video-embed', plyrOptions);
