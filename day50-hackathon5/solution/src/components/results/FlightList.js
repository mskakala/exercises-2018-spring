import * as React from 'react';

import './FlightList.css';
import Typography from '../common/Typography';
import Duration from '../common/Duration';
import Time from '../common/Time';

const FlightList = ({ flights, origin, destination }) =>
  (
    <div className='FlightList'>
      <div className='FlightListHeader'>
        <Typography size='header'>
          Showing {flights.length} flights from {origin} to {destination}:
        </Typography>
      </div>
      <div className='FlightListItems'>
        {flights.map(flight => (
          <div key={flight.id} className='FlightListItem'>
            <div>
              <div>
                <Time datetime={flight.dTime} />
                <Typography> - </Typography>
                <Time datetime={flight.aTime} />
              </div>
            </div>
            <div>
              <div>
                <Duration arrival={flight.aTimeUTC} departure={flight.dTimeUTC} />
              </div>
              <div>
                <Typography type='secondary'>
                  {flight.cityFrom} ({flight.flyFrom}) -> {flight.cityTo} ({flight.flyTo})
                </Typography>
              </div>
            </div>
            <div>
              <Typography>{flight.price} EUR</Typography>
            </div>
          </div>
        ))}
      </div>
    </div>
  );

export default FlightList;
