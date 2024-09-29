import Blog from "../../../shared/Blog";

const CallInvokFunction = () => {
    return (
        <div className="Call/Invok topic-border">
            <Blog
                topic={'Function call / Invok'}
                code={
        `
        function doubleIt (num){
         return num * 2
      };

      const result = doubleIt(15)
      console.log(result)

      
      const func = function (num){
         return num * 2
      };
      const result = func(15);
      console.log(result);

      
      const func = function doubleIt (num){
         return num * 2
      };
      const result = func(15)
      console.log(result)
                    `}
            />
        </div>
    );
};

export default CallInvokFunction ;