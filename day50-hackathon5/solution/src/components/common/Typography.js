import * as React from 'react';
import classNames from 'classnames';

import './Typography.css';

const Typography = ({ type, size, children }) =>
  (
    <span className={classNames(['Typography', type, size])}>
      {children}
    </span>
  );

export default Typography;
