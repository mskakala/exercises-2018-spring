import * as React from 'react';

import searchFlights from '../utils/searchFlights';
import FlightList from './results/FlightList';
import Typography from './common/Typography';
import './Search.css';

class Search extends React.Component {
  constructor(props) {
    super(props);

    this.state = {
      search: {
        origin: 'PRG',
        destination: 'VLC',
      },
      error: null,
      isLoading: false,
      flights: [],
    };
  }

  async componentDidMount() {
    this.setState({ isLoading: true, error: null });
    const { origin, destination } = this.state.search;
    let flights = [];

    try {
      flights = await searchFlights(origin, destination);
    } catch (error) {
      this.setState({ error });
    }

    this.setState({ flights, isLoading: false });
  }

  render() {
    const { flights, isLoading, search, error } = this.state;
    let child = null;

    if (isLoading) {
      child = 'Loading ...';
    } else if (error) {
      child = (<Typography>{error.message}</Typography>);
    } else if (flights.length) {
      child = (<FlightList flights={flights} {...search} />);
    } else {
      child = (<Typography>No results ...</Typography>);
    }

    return (
      <div className='Search'>
        {child}
      </div>
    );
  }
}

export default Search;
