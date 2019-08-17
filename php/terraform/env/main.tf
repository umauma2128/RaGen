provider "aws"  {}

terraform {
  backend "s3" {
    bucket = "cma-tf-state-cper"
    key    = "cma-prod/obi/obi-infra/obi-rds-sandbox/terraform.tfstate "
  }
}

module "obi-rds" {
env                   = "dev"
db_name               = "obidbrds001awsp "
rds_engine_version    = "12.2.0.1.ru-2019-04.rur-2019-04.r1"
source                = "../../../modules/obi-rds"
db_user               = "${var.db_user}"
db_password           = "${var.db_password}"
vpc_id                = "vpc-c04d62a9"
subnet_ids            = ["subnet-5b487732", "subnet-39ccb342"]
rds_allocated_storage = "20"
infra_sg_name         = "INF-Prod"
multi_az              = "false"
