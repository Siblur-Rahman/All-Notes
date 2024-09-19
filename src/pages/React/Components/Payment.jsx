import Blog from "../../../shared/Blog";

const Payment = () => {
    return (
        <div className='to_jump' id="Payment">
            <div className='topic-border'>
                <Blog
                id={'Payment'}
                />
                <Blog
                topic={'Stripe'}
                fileName={'client-side'}
                time={'70-2'}
                url={'https://github.com/stripe/react-stripe-js'}
                npmCode={'npm install @stripe/react-stripe-js @stripe/stripe-js'}
                />
                <Blog
                topic={'Custom Payment'}
                fileName={'server-side'}
                time={'70-4 2:30'}
                url={'https://docs.stripe.com/payments/quickstart'}
                npmCode={'npm install --save stripe'}
                />
                <Blog
                topic={'Testing Card Number'}
                url={'https://docs.stripe.com/terminal/references/testing'}
                />
                <Blog
                    topic={'To see Pament To Clicl Transactions that was Payment'}
                    url={'https://dashboard.stripe.com/test/payments'}
                />
            </div>
        </div>
    );
};

export default Payment;