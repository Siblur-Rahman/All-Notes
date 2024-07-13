import ExpressBasic from './ExpressBasic';
import InstallNodeExpress from './InstallNodeExpress';
import Middleware from './Middleware';
import ServerBasic from './ServerBasic';
import UsageExamples from './UsageExamples';

const Server = () => {
    return (
        <div>
            <ServerBasic/>
            <Middleware/>
            <UsageExamples/>
            <InstallNodeExpress/>
            <ExpressBasic/>
        </div>
    );
};

export default Server;