import React, { useState, useEffect } from 'react';

function TimerBlock(props) {
  // Function to calculate time remaining
  function setTime(milliseconds) {
    if (milliseconds < 0) {
      milliseconds = 0;
    }
    const seconds = milliseconds / 1000;
    const minutes = seconds / 60;
    const hours = minutes / 60;
    const days = hours / 24;
    return {
      seconds: Math.floor(seconds % 60),
      minutes: Math.floor(minutes % 60),
      hours: Math.floor(hours % 24),
      days: Math.floor(days),
    };
  }

  // State to hold the remaining time
  const [timeToEvent, setTimeToEvent] = useState(setTime(new Date(props.event.timestamp * 1000) - new Date().getTime()));

  useEffect(() => {
    // Set up the interval to update every second
    const interval = setInterval(() => {
      const remainingTime = new Date(props.event.timestamp * 1000) - new Date().getTime();
      setTimeToEvent(setTime(remainingTime));
    }, 1000);

    // Cleanup the interval on component unmount
    return () => clearInterval(interval);
  }, [props.event.timestamp]); // Re-run effect when event timestamp changes

  return (
    <div className="flex justify-evenly">
      <p className="text-yellow-300 text-3xl pl-2">{timeToEvent.days}</p>
      <p className="text-yellow-900 text-xl">DAYS</p>
      <p className="text-yellow-300 text-3xl pl-2">{timeToEvent.hours}</p>
      <p className="text-yellow-900 text-xl">HOURS</p>
      <p className="text-yellow-300 text-3xl pl-2">{timeToEvent.minutes}</p>
      <p className="text-yellow-900 text-xl">MINS</p>
      <p className="text-yellow-300 text-3xl pl-2">{timeToEvent.seconds}</p>
      <p className="text-yellow-900 text-xl">SEC</p>
    </div>
  );
}

export default TimerBlock;
