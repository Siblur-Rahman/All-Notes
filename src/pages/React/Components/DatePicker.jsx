import Blog from "../../../Shared/Blog";

const DatePicker = () => {
    return (
        <div>
            <Blog
            topic={'Date Picker'}
            npmCode={'npm install react-datepicker --save'}
            url={'https://www.npmjs.com/package/react-datepicker'}
            code={`
import React, { useState } from "react";
import DatePicker from "react-datepicker";

import "react-datepicker/dist/react-datepicker.css";

// CSS Modules, react-datepicker-cssmodules.css
// import 'react-datepicker/dist/react-datepicker-cssmodules.css';

const Example = () => {
  const [startDate, setStartDate] = useState(new Date());
  return (
    <DatePicker selected={startDate} 
    onChange={(date) => setStartDate(date)} />
  );
};
            `}
            />
        </div>
    );
};

export default DatePicker;