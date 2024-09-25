import Blog from "../../../shared/Blog";

const DatePicker = () => {
    return (
        <div className="to_jump" id="Date Picker">
          <div className="topic-border">
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
      </div>
    );
};

export default DatePicker;