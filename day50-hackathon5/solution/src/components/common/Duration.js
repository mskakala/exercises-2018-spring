import * as React from 'react';
import { DateTime } from 'luxon';

import Typography from './Typography';

const Duration = ({ arrival, departure }) => {
  const duration = DateTime
    .fromMillis(arrival * 1000)
    .diff(DateTime.fromMillis(departure * 1000))
    .toFormat(`hh 'h' mm 'm'`);

  return (
    <Typography>{duration}</Typography>
  );
};

export default Duration;
