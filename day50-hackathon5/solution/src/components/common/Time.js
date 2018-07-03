import * as React from 'react';
import { DateTime } from 'luxon';

import Typography from './Typography';

const Time = ({ datetime }) =>
  (
    <Typography>
      {DateTime
        .fromMillis(datetime * 1000)
        .toFormat('hh:mm')}
    </Typography>
  );

export default Time;
