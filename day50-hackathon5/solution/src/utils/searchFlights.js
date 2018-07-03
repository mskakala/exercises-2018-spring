import { DateTime } from 'luxon';

import { getJson } from './network';

export default async (origin, destination) => {
  const when = DateTime.local().plus({ days: 1 }).toFormat('dd/MM/yyyy');

  const json = await getJson('https://api.skypicker.com/flights', {
    flyFrom: origin,
    to: destination,
    dateFrom: when,
    dateTo: when,
    limit: 5
  });
  return json && json.data;
}
