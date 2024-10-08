import DeleteApi from './DeleteApi';
import ExpressBasic from './ExpressBasic';
import GetApi from './GetApi';
import InstallNodeExpress from './InstallNodeExpress';
import Middleware from './Middleware';
import PostApi from './PostApi';
import PutApi from './PutApi';
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
            <PostApi/>
            <PutApi/>
            <GetApi/>
            <DeleteApi/>
        </div>
    );
};

export default Server;